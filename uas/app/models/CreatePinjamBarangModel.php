<?php

class CreatePinjamBarangModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUserData($id_user)
    {
        try {
            $this->db->query("SELECT * FROM users WHERE id = :id_user");
            $this->db->bind(':id_user', $id_user);
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateUserData($id_user, $jumlah_barang_dipinjam)
    {
        try {
            $this->db->query("UPDATE users SET jumlah_barang_dipinjam = :jumlah_barang_dipinjam WHERE id = :id_user");

            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':jumlah_barang_dipinjam', $jumlah_barang_dipinjam);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getBarangList()
    {
        try {
            $this->db->query("SELECT * FROM barang");
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getStokInformation()
    {
        try {
            $this->db->query("SELECT id, stok FROM barang");
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function insertPinjamBarang($data)
    {
        try {
            $this->db->query("INSERT INTO pinjambarang (id_barang, id_user, qty, tgl_mulai, tgl_selesai, lokasi_barang, status) 
                              VALUES (:id_barang, :id_user, :qty, :tgl_mulai, :tgl_selesai, :lokasi_barang, :status)");

            $this->db->bind(':id_barang', $data['id_barang']);
            $this->db->bind(':id_user', $data['id_user']);
            $this->db->bind(':qty', $data['qty']);
            $this->db->bind(':tgl_mulai', $data['tgl_mulai']);
            $this->db->bind(':tgl_selesai', $data['tgl_selesai']);
            $this->db->bind(':lokasi_barang', $data['lokasi_barang']);
            $this->db->bind(':status', $data['status']);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateStokBarang($id_barang, $qty)
    {
        try {
            $this->db->query("UPDATE barang SET stok = stok - :qty WHERE id = :id_barang");

            $this->db->bind(':qty', $qty);
            $this->db->bind(':id_barang', $id_barang);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
