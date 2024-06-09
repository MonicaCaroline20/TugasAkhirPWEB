<?php

class DetailBarangModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getDetailById($id)
    {
        try {
            $this->db->query("SELECT users.nama as nama_user, barang.nama as nama_barang, barang.foto as foto_barang, pinjambarang.qty, pinjambarang.tgl_mulai, pinjambarang.tgl_selesai, 
                                     pinjambarang.status, pinjambarang.lokasi_barang 
                              FROM pinjambarang 
                              INNER JOIN users ON users.id = pinjambarang.id_user 
                              INNER JOIN barang ON barang.id = pinjambarang.id_barang 
                              WHERE pinjambarang.id_barang = :id");
            $this->db->bind(':id', $id);
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
