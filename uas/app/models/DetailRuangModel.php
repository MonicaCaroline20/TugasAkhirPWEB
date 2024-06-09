<?php

class DetailRuangModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getDetailById($id)
    {
        try {
            $this->db->query("SELECT users.nama as nama_user, ruang.nama as nama_ruang, ruang.foto as foto_ruang, pinjamruang.qty, pinjamruang.tgl_mulai, pinjamruang.tgl_selesai, 
                                     pinjamruang.status, pinjamruang.lokasi_ruang 
                              FROM pinjamruang 
                              INNER JOIN users ON users.id = pinjamruang.id_user 
                              INNER JOIN ruang ON ruang.id = pinjamruang.id_ruang 
                              WHERE pinjamruang.id_ruang = :id");
            $this->db->bind(':id', $id);
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
