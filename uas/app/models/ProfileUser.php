
<?php

    class ProfileUser {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getUserById($id) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            return $this->db->single();
        }

        public function getUserProfileImage($id) {
            $sql = "SELECT foto FROM users WHERE id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            
            return isset($result['foto']) ? $result['foto'] : '';
        }

        public function updateProfileImage($id, $profileImagePath) {
            $sql = "UPDATE users SET foto = :foto WHERE id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            $this->db->bind(':foto', $profileImagePath);
        
            return $this->db->execute();
        }
        
        public function updateUserProfile($id, $username, $nama, $nim, $email, $password) {
            $sql = "UPDATE users SET username = :username, nama = :nama, nim = :nim, email = :email, password = :password, prodi = :prodi WHERE id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            $this->db->bind(':username', $username);
            $this->db->bind(':nama', $nama);
            $this->db->bind(':nim', $nim);
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);

            $lastFourDigits = substr($nim, -4);
            $lastTwoDigits = substr($lastFourDigits, 0, 2);
            switch ($lastTwoDigits) {
                case '10':
                    $prodi = 'Sistem Informasi';
                    break;
                case '20':
                    $prodi = 'Teknologi Informasi';
                    break;
                case '30':
                    $prodi = 'Informatika';
                    break;
                default:
                    $prodi = "Nim Tidak Valid";
                    break;
                }
                
            $this->db->bind(':prodi', $prodi);

            return $this->db->execute();
        }


        


    }

?>