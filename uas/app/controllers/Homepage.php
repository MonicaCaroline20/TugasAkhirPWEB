<?php
    class Homepage extends Controller{
        public function index(){
            $data['judul'] = 'Homepage';
            $data['folder'] = 'user/Homepage';
            $data['style'] = 'Homepage';

            $this->view('user/templates/session');
            $this->view('user/templates/header', $data);
            $this->view('user/templates/navigasi');
            $this->view('user/homepage/homepage');
            $this->view('user/templates/footer');
            $this->view('user/templates/penutup');
        }
        
    }

?>