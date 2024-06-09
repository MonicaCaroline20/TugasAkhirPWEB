<?php

    class LogoutAdmin extends Controller{
        public function index(){
            header('Location: ' . BASEURL . '/?controller=Dashboard');
        }
        
        public function logout(){
            $this->view('admin/logout/logout');
        }
    }

?>