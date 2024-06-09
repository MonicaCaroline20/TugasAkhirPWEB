<?php
    class DaftarRuang extends Controller{
        public function index(){
            $data['judul'] = 'Daftar Ruang';
            $data['folder'] = 'user/DaftarRuang';
            $data['style'] = 'DaftarRuang';

            $this->view('user/templates/session');
            $this->view('user/templates/header', $data);
            $this->view('user/templates/navigasi');
            $this->view('user/daftarRuang/daftarRuang', $data);
            $this->view('user/templates/footer');
            $this->view('user/templates/penutup');
        }
        
    }

?>