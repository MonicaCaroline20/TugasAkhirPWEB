<?php

class Admin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function CheckAdminLogin($username, $password){
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $this->db->query($sql);
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        return $this->db->single();
    }

}



?>