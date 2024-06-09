<?php

class DetailRuang extends Controller
{
    public function index($id)
    {
        $data['judul'] = 'Detail Ruang';
        $data['folder'] = 'user/DetailRuang';
        $data['style'] = 'DetailRuang';

        $detailModel = $this->model('DetailRuangModel');

        $data['detail'] = $detailModel->getDetailById($id);

        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/detailRuang/detailRuang', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }
}
?>
