<?php
class RekapitulasiBarangModel{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    
    public function getAllRekapitulasi($userId, $start = 0, $limit = 10)
    {
        $sql = "SELECT rekapitulasibarang.*, barang.nama AS nama_barang, users.nama AS nama_user 
                FROM rekapitulasibarang
                JOIN barang ON rekapitulasibarang.id_barang = barang.id
                JOIN users ON rekapitulasibarang.id_user = users.id
                WHERE rekapitulasibarang.id_user = :userId
                LIMIT :start, :limit";
        $this->db->query($sql);
        $this->db->bind(':userId', $userId);
        $this->db->bind(':start', $start, PDO::PARAM_INT);
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
    }

    public function getTotalRekapitulasi($userId)
    {
        $sql = "SELECT COUNT(*) as total FROM rekapitulasibarang WHERE id_user = :userId";
        $this->db->query($sql);
        $this->db->bind(':userId', $userId);
        return $this->db->single()['total'];
    }
}
?>
