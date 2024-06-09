<?php

class CreatePinjamRuangModel
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

    public function updateUserData($id_user, $jumlah_ruang_dipinjam)
    {
        try {
            $this->db->query("UPDATE users SET jumlah_ruang_dipinjam = :jumlah_ruang_dipinjam WHERE id = :id_user");

            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':jumlah_ruang_dipinjam', $jumlah_ruang_dipinjam);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getRuangList()
    {
        try {
            $this->db->query("SELECT * FROM ruang");
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getStokInformation()
    {
        try {
            $this->db->query("SELECT id, stok FROM ruang");
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function insertPinjamRuang($data)
    {
        try {
            $this->db->query("INSERT INTO pinjamruang (id_ruang, id_user, qty, tgl_mulai, tgl_selesai, lokasi_ruang, status) 
                              VALUES (:id_ruang, :id_user, :qty, :tgl_mulai, :tgl_selesai, :lokasi_ruang, :status)");

            $this->db->bind(':id_ruang', $data['id_ruang']);
            $this->db->bind(':id_user', $data['id_user']);
            $this->db->bind(':qty', $data['qty']);
            $this->db->bind(':tgl_mulai', $data['tgl_mulai']);
            $this->db->bind(':tgl_selesai', $data['tgl_selesai']);
            $this->db->bind(':lokasi_ruang', $data['lokasi_ruang']);
            $this->db->bind(':status', $data['status']);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateStokRuang($id_ruang, $qty)
    {
        try {
            $this->db->query("UPDATE ruang SET stok = stok - :qty WHERE id = :id_ruang");

            $this->db->bind(':qty', $qty);
            $this->db->bind(':id_ruang', $id_ruang);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
