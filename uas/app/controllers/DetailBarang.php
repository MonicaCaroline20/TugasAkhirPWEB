<?php

class DetailBarang extends Controller
{
    public function index($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['folder'] = 'user/DetailBarang';
        $data['style'] = 'DetailBarang';

        $detailModel = $this->model('DetailBarangModel');

        $data['detail'] = $detailModel->getDetailById($id);

        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/detailBarang/detailBarang', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }
}
?>
