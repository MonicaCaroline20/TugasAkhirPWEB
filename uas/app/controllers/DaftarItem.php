<?php

class DaftarItem extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Barang dan Ruang';
        $data['folder'] = 'admin/DaftarItem';
        $data['style'] = 'DaftarItem';
      
        $this->view('admin/templates/session');
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/navigasi');
        $this->view('admin/daftarItem/daftarItem', $data);
        $this->view('admin/templates/penutup');
    }
}
?>
