<?php
class RekapitulasiRuangModel{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    
    public function getAllRekapitulasi($userId, $start = 0, $limit = 10)
    {
        $sql = "SELECT rekapitulasiruang.*, ruang.nama AS nama_ruang, users.nama AS nama_user 
                FROM rekapitulasiruang
                JOIN ruang ON rekapitulasiruang.id_ruang = ruang.id
                JOIN users ON rekapitulasiruang.id_user = users.id
                WHERE rekapitulasiruang.id_user = :userId
                LIMIT :start, :limit";
        $this->db->query($sql);
        $this->db->bind(':userId', $userId);
        $this->db->bind(':start', $start, PDO::PARAM_INT);
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
    }

    public function getTotalRekapitulasi($userId)
    {
        $sql = "SELECT COUNT(*) as total FROM rekapitulasiruang WHERE id_user = :userId";
        $this->db->query($sql);
        $this->db->bind(':userId', $userId);
        return $this->db->single()['total'];
    }
}
?>
