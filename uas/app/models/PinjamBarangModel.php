<?php

class PinjamBarangModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTotalBarang()
    {
        try {
            $this->db->query("SELECT COUNT(*) as total FROM pinjambarang");
            $result = $this->db->single();
            return $result['total'];
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllBarang($start, $itemsPerPage)
    {
        try {
            $this->db->query("SELECT pinjambarang.id, pinjambarang.id_barang, pinjambarang.id_user, pinjambarang.tgl_mulai, pinjambarang.tgl_selesai, pinjambarang.qty, pinjambarang.lokasi_barang, pinjambarang.status, barang.nama 
                            FROM pinjambarang 
                            INNER JOIN barang ON barang.id = pinjambarang.id_barang 
                            INNER JOIN users ON users.id = pinjambarang.id_user 
                            LIMIT :start, :itemsPerPage");
            $this->db->bind(':start', $start);
            $this->db->bind(':itemsPerPage', $itemsPerPage);
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateStatusIfGreaterThanZero()
    {
        try {
            // Update status to 'tersedia' where stok is greater than 0
            $sql = "UPDATE barang SET status = 'tersedia' WHERE stok > 0";
            $this->db->query($sql);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateStatusIfZeroOrLess()
    {
        try {
            // Update status to 'tidak tersedia' where stok is less than or equal to 0
            $sql = "UPDATE barang SET status = 'tidak tersedia' WHERE stok <= 0";
            $this->db->query($sql);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    // models/PinjamBarangModel.php

    public function batalPinjaman($id)
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

    public function kembalikanPinjaman($id)
    {
        try {
            $querySelect = "SELECT id_barang FROM pinjambarang WHERE id = :id";
            $this->db->query($querySelect);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            $id_barang = $result['id_barang'];

            $queryUpdate = "UPDATE pinjambarang SET status = 'prosespengembalian' WHERE id_barang = :id_barang";
            $this->db->query($queryUpdate);
            $this->db->bind(':id_barang', $id_barang);
            $this->db->execute();

           
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
?>
