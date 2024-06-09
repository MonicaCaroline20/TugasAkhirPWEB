<?php

class LoginAdmin extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $data['folder'] = 'admin/LoginAdmin';
        $data['style'] = 'LoginAdmin';

        
        if (isset($_SESSION['admin_id'])) {
            header('Location: ' . BASEURL . '/?controller=Dashboard');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $AdminModel = $this->model('Admin');
                $AdminData = $AdminModel->CheckAdminLogin($username, $password);

                if ($AdminData) {
                    $_SESSION['admin_id'] = $AdminData['id'];
                    header('Location: ' . BASEURL . '/?controller=Dashboard');
                    exit();
                } else {
                    echo'error';
                }
            } 
            
        }
        

        $this->view('admin/templates/header', $data);
        $this->view('admin/login/login');
        $this->view('admin/templates/penutup');
    }
    
}


?>