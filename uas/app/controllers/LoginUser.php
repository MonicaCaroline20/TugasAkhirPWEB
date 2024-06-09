<?php

class LoginUser extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $data['folder'] = 'user/LoginUser';
        $data['style'] = 'LoginUser';

        
        if (isset($_SESSION['user_id'])) {
            header('Location: ' . BASEURL . '/?controller=Homepage');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $userModel = $this->model('User');
                $userData = $userModel->CheckUserLogin($email, $password);

                if ($userData) {
                    $_SESSION['user_id'] = $userData['id'];
                    header('Location: ' . BASEURL . '/?controller=Homepage');
                    exit();
                } else {
                    $data['loginError'] = 'Email or password is incorrect.';
                }
            } elseif (isset($_POST['register'])) {
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $nim = $_POST['nim'];
                $password = $_POST['password'];

                $fullName = $firstName . ' ' . $lastName;

                $userModel = $this->model('User');

                $registerStatus = $userModel->registerUser($fullName, $username, $email, $nim, $password);

                if ($registerStatus) {
                    header('Location: ' . BASEURL . '/?controller=LoginUser');
                    exit();
                } else {
                    echo 'error';
                }
            }
            
        }
        

        $this->view('user/templates/header', $data);
        $this->view('user/loginUser/loginUser', $data);
        $this->view('user/templates/penutup');
    }
    
}


?>