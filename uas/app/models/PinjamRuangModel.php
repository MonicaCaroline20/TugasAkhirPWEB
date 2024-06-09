<?php

class PinjamRuangModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTotalRuang()
    {
        try {
            $this->db->query("SELECT COUNT(*) as total FROM pinjamruang");
            $result = $this->db->single();
            return $result['total'];
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllRuang($start, $itemsPerPage)
    {
        try {
            $this->db->query("SELECT pinjamruang.id, pinjamruang.id_ruang, pinjamruang.id_user, pinjamruang.tgl_mulai, pinjamruang.tgl_selesai , pinjamruang.qty, pinjamruang.lokasi_ruang, pinjamruang.status, ruang.nama 
                            FROM pinjamruang 
                            INNER JOIN ruang ON ruang.id = pinjamruang.id_ruang 
                            INNER JOIN users ON users.id = pinjamruang.id_user 
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
            $sql = "UPDATE ruang SET status = 'tersedia' WHERE stok > 0";
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
            $sql = "UPDATE ruang SET status = 'tidak tersedia' WHERE stok <= 0";
            $this->db->query($sql);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function kembalikanPinjaman($id)
    {
        try {
            $querySelect = "SELECT id_ruang FROM pinjamruang WHERE id = :id";
            $this->db->query($querySelect);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            $id_ruang = $result['id_ruang'];

            $queryUpdate = "UPDATE pinjamruang SET status = 'prosespengembalian' WHERE id_ruang = :id_ruang";
            $this->db->query($queryUpdate);
            $this->db->bind(':id_ruang', $id_ruang);
            $this->db->execute();

           
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
?>
