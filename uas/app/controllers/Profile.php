<?php

class Profile extends Controller{

    public function index(){
        $data['judul'] = 'Profile';
        $data['folder'] = 'user/Profile';
        $data['style'] = 'Profile';

        if (isset($_SESSION['user_id'])) {
            $userModel = $this->model('ProfileUser');
            $userData = $userModel->getUserById($_SESSION['user_id']);

            if ($userData) {
                $data['user'] = $userData;
            }
        }

        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/profile/profile', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }

    public function upload() {
        if (isset($_FILES['profile_image']) && isset($_SESSION['user_id'])) {
            $targetDirectory = "public/img/profile/";
            $targetFile = $targetDirectory . "user_{$_SESSION['user_id']}.jpg";

            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
                $userModel = $this->model('ProfileUser');
                $result = $userModel->updateProfileImage($_SESSION['user_id'], $targetFile);
    
                if ($result) {
                    header('Location: ' . BASEURL . '/?controller=Profile');
                    exit();
                } else {
                    echo "Failed to update database with the file path.";
                }
            } else {
                echo "Failed to upload image.";
            }
        }
    }

    public function deleteImage() {
        if (isset($_SESSION['user_id'])) {
            $userModel = $this->model('ProfileUser');
            $currentImagePath = $userModel->getUserProfileImage($_SESSION['user_id']);
    
            if (!empty($currentImagePath)) {
                if (file_exists($currentImagePath)) {
                    unlink($currentImagePath);
                }
    
                $userModel->updateProfileImage($_SESSION['user_id'], '');
            }
        }
    }

    public function updateProfile() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
            $userModel = $this->model('ProfileUser');
            $userData = $userModel->getUserById($_SESSION['user_id']);

            if ($userData) {
                $id = $_SESSION['user_id'];
                $username = $_POST['username'];
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $result = $userModel->updateUserProfile($id, $username, $nama, $nim, $email, $password);

                if ($result) {
                    header('Location: ' . BASEURL . '/?controller=Profile');
                    exit();
                } else {
                    echo "Failed to update profile.";
                }
            }
        }
    }

}