<?php
class Daftar_Barang{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    
    public function getAllBarang($start = 0, $limit = 10)
    {
        $sql = "SELECT * FROM barang LIMIT :start, :limit";
        $this->db->query($sql);
        $this->db->bind(':start', $start, PDO::PARAM_INT);
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
    }

    public function getTotalBarang()
    {
        $sql = "SELECT COUNT(*) as total FROM barang";
        $this->db->query($sql);
        return $this->db->single()['total'];
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
}
?>
