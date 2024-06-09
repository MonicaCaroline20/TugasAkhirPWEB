<?php
class PersetujuanRuangModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUsers() {
        $sql = "SELECT users.nama AS nama_peminjam, ruang.nama AS nama_ruang, pinjamruang.id AS id_pinjam, pinjamruang.tgl_mulai, pinjamruang.tgl_selesai, pinjamruang.qty, pinjamruang.status
                FROM users
                INNER JOIN pinjamruang ON users.id = pinjamruang.id_user
                INNER JOIN ruang ON pinjamruang.id_ruang = ruang.id";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function approveRequest($id) {
        // Implement logic to update the status to 'approve' in the pinjambarang table
        $sql = "UPDATE pinjamruang SET status = 'approve' WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function rejectRequest($id) {
        // Fetch the necessary information for updating the quantity
        $sql = "SELECT pr.qty AS qty, pr.id_ruang AS id_ruang
                FROM pinjamruang pr
                WHERE pr.id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $result = $this->db->single();

        // Increment the quantity in the barang table
        $sqlUpdateRuang = "UPDATE ruang SET stok = stok + :qty WHERE id = :id_ruang";
        $this->db->query($sqlUpdateRuang);
        $this->db->bind(':qty', $result['qty']);
        $this->db->bind(':id_ruang', $result['id_ruang']);
        $this->db->execute();

        // Update the status to 'rejected' in the pinjambarang table
        $sqlUpdatePinjamRuang = "UPDATE pinjamruang SET status = 'rejected' WHERE id = :id";
        $this->db->query($sqlUpdatePinjamRuang);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }

    public function kembaliPinjaman($id)
    {
        try {
            // 1. Get the quantity and id_barang before deleting the record
            $querySelect = "SELECT qty, id_ruang, id_user FROM pinjamruang WHERE id = :id";
            $this->db->query($querySelect);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            $quantity = $result['qty'];
            $id_barang = $result['id_ruang'];
            $id_user = $result['id_user'];

            // 2. Delete the record from pinjambarang
            $queryDelete = "DELETE FROM pinjamruang WHERE id = :id";
            $this->db->query($queryDelete);
            $this->db->bind(':id', $id);
            $this->db->execute();

            // 3. Update the quantity of the corresponding item in barang
            $queryUpdate = "UPDATE ruang SET stok = stok + :quantity WHERE id = :id_ruang";
            $this->db->query($queryUpdate);
            $this->db->bind(':quantity', $quantity);
            $this->db->bind(':id_ruang', $id_ruang);
            $this->db->execute();

            $queryUpdateUser = "UPDATE users SET jumlah_ruang_dipinjam = jumlah_ruang_dipinjam - :quantity WHERE id = :id_user";
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
