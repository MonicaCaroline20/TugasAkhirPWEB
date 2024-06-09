<?php
class PersetujuanModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUsers() {
        $sql = "SELECT users.nama AS nama_peminjam, barang.nama AS nama_barang, pinjambarang.id AS id_pinjam, pinjambarang.tgl_mulai, pinjambarang.tgl_selesai, pinjambarang.qty, pinjambarang.status
                FROM users
                INNER JOIN pinjambarang ON users.id = pinjambarang.id_user
                INNER JOIN barang ON pinjambarang.id_barang = barang.id";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function approveRequest($id) {
        // Implement logic to update the status to 'approve' in the pinjambarang table
        $sql = "UPDATE pinjambarang SET status = 'approve' WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function rejectRequest($id) {
        // Fetch the necessary information for updating the quantity
        $sql = "SELECT pb.qty AS qty, pb.id_barang AS id_barang
                FROM pinjambarang pb
                WHERE pb.id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $result = $this->db->single();

        // Increment the quantity in the barang table
        $sqlUpdateBarang = "UPDATE barang SET stok = stok + :qty WHERE id = :id_barang";
        $this->db->query($sqlUpdateBarang);
        $this->db->bind(':qty', $result['qty']);
        $this->db->bind(':id_barang', $result['id_barang']);
        $this->db->execute();

        // Update the status to 'rejected' in the pinjambarang table
        $sqlUpdatePinjamBarang = "UPDATE pinjambarang SET status = 'rejected' WHERE id = :id";
        $this->db->query($sqlUpdatePinjamBarang);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }

    public function kembaliPinjaman($id)
    {
        try {
            // 1. Get the quantity and id_barang before deleting the record
            $querySelect = "SELECT qty, id_barang, id_user FROM pinjambarang WHERE id = :id";
            $this->db->query($querySelect);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            $quantity = $result['qty'];
            $id_barang = $result['id_barang'];
            $id_user = $result['id_user'];

            // 2. Delete the record from pinjambarang
            $queryDelete = "DELETE FROM pinjambarang WHERE id = :id";
            $this->db->query($queryDelete);
            $this->db->bind(':id', $id);
            $this->db->execute();

            // 3. Update the quantity of the corresponding item in barang
            $queryUpdate = "UPDATE barang SET stok = stok + :quantity WHERE id = :id_barang";
            $this->db->query($queryUpdate);
            $this->db->bind(':quantity', $quantity);
            $this->db->bind(':id_barang', $id_barang);
            $this->db->execute();

            $queryUpdateUser = "UPDATE users SET jumlah_barang_dipinjam = jumlah_barang_dipinjam - :quantity WHERE id = :id_user";
            $this->db->query($queryUpdateUser);
            $this->db->bind(':quantity', $quantity);
            $this->db->bind(':id_user', $id_user);
            $this->db->execute();
           
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
