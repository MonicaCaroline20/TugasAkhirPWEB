
<?php

    class EditDataRuangModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        
        public function updateDataRuang($id, $nama, $stok, $status, $foto) {
            
            $sql = "INSERT INTO ruang (id, nama, stok, status, foto) VALUES (:id, :nama, :stok, :status, :foto)";
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