<?php

class User{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function CheckUserLogin($email, $password){
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        return $this->db->single();
    }

    public function registerUser($fullName, $username, $email, $nim, $password) {
        $sql = "INSERT INTO users (nama, username, email, nim, password, prodi) VALUES (:nama, :username, :email, :nim, :password, :prodi)";
        $this->db->query($sql);
        $this->db->bind(':nama', $fullName);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':nim', $nim);
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