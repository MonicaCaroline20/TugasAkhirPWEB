<?php
    class DashboardModel {
        private $db;
    
        public function __construct() {
            $this->db = new Database;
        }
    
        public function getAllUsers() {
            $this->db->query("SELECT * FROM users");
            return $this->db->resultSet();
        }

        public function countRegisteredUsers() {
            $sql = "SELECT COUNT(*) as user_count FROM users";
            $this->db->query($sql);
            return $this->db->single()['user_count'];
        }
        public function countTotalBarang() {
            // Assuming 'barang' is the name of your items table
            $sql = "SELECT COUNT(*) as item_count FROM barang";
            $this->db->query($sql);
            return $this->db->single()['item_count'];
        }
        public function countTotalRuang() {
            // Assuming 'ruang' is the name of your rooms table
            $sql = "SELECT COUNT(*) as room_count FROM ruang";
            $this->db->query($sql);
            return $this->db->single()['room_count'];
        }
        public function countTotalPinjam() {
            // Assuming 'pinjambarang' and 'pinjamruang' are the names of your borrow tables
            $sql = "SELECT (SELECT COUNT(*) FROM pinjambarang) + (SELECT COUNT(*) FROM pinjamruang) as borrow_count";
            $this->db->query($sql);
            return $this->db->single()['borrow_count'];
        }
        public function countBorrowedItems($userId) {
            $sql = "SELECT COUNT(*) as borrowed_items FROM pinjambarang WHERE user_id = :user_id";
            $this->db->query($sql);
            $this->db->bind(':user_id', $userId);
            return $this->db->single()['borrowed_items'];
        }
        
        public function countBorrowedRooms($userId) {
            $sql = "SELECT COUNT(*) as borrowed_rooms FROM pinjamruang WHERE user_id = :user_id";
            $this->db->query($sql);
            $this->db->bind(':user_id', $userId);
            return $this->db->single()['borrowed_rooms'];
        }
        
    }

?>