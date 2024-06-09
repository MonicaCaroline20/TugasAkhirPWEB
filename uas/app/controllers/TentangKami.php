<?php
    class TentangKami extends Controller{
        public function index(){
            $data['judul'] = 'Tentang Kami';
            $data['folder'] = 'user/TentangKami';
            $data['style'] = 'TentangKami';

            $this->view('user/templates/session');
            $this->view('user/templates/header', $data);
            $this->view('user/templates/navigasi');
            $this->view('user/tentangKami/tentangKami');
            $this->view('user/templates/footer');
            $this->view('user/templates/penutup');
        }
    }
?>