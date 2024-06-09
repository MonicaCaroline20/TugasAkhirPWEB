<?php
class Peminjaman_Ruang{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    
    public function getAllRuang($start = 0, $limit = 20)
    {
        $sql = "SELECT * FROM ruang WHERE status = 'tersedia' LIMIT :start, :limit";
        $this->db->query($sql);
        $this->db->bind(':start', $start, PDO::PARAM_INT);
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
    }

    public function getTotalRuang()
    {
        $sql = "SELECT COUNT(*) as total FROM ruang";
        $this->db->query($sql);
        return $this->db->single()['total'];
    }
}
?>
