<?php

    class LogoutUser extends Controller{
        public function index(){
            header('Location: ' . BASEURL . '/?controller=Homepage');
        }
        
        public function logout(){
            $this->view('user/logoutUser/logoutUser');
        }
    }

?>