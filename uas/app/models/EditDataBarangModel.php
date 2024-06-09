
<?php

    class EditDataBarangModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        
        public function updateDataBarang($id, $nama, $stok, $status, $foto) {
            
            $sql = "INSERT INTO barang (id, nama, stok, status, foto) VALUES (:id, :nama, :stok, :status, :foto)";
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            $this->db->bind(':nama', $nama);
            $this->db->bind(':status', $status);
            $this->db->bind(':stok', $stok);
            $this->db->bind(':foto', $foto);

            return $this->db->execute();
        }


        


    }

?>