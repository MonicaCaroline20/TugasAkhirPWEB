<?php

class DetailPeminjaman extends Controller
{
    public function index()
    {
        $data['judul'] = 'Detail Peminjaman';
        $data['folder'] = 'user/DetailPeminjaman';
        $data['style'] = 'DetailPeminjaman';

        $createPinjamBarangModel = $this->model('CreatePinjamBarangModel');
        $data['barangList'] = $createPinjamBarangModel->getBarangList();
        $data['stok'] = $createPinjamBarangModel->getStokInformation();


        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/detailPeminjaman/detailPeminjaman', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }

    public function processForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $createPinjamBarangModel = $this->model('CreatePinjamBarangModel');

            $id_barang = $_POST['id_barang'];
            $qty = $_POST['qty'];
            $tgl_mulai = $_POST['tgl_mulai'];
            $tgl_selesai = $_POST['tgl_selesai'];
            $lokasi_barang = $_POST['lokasi_barang'];
            $id_user = $_POST['id_user'];
            $status = $_POST['status'];

            $userData = $createPinjamBarangModel->getUserData($id_user);

            if ($userData) {
                $newJumlahBarangDipinjam = $userData['jumlah_barang_dipinjam'] + $qty;
    
                $createPinjamBarangModel->updateUserData($id_user, $newJumlahBarangDipinjam);
            }

            $createPinjamBarangModel->insertPinjamBarang([
                'id_barang' => $id_barang,
                'id_user' => $id_user,  
                'qty' => $qty,
                'tgl_mulai' => $tgl_mulai,
                'tgl_selesai' => $tgl_selesai,
                'lokasi_barang' => $lokasi_barang,
                'status' => $status,
            ]);

            $createPinjamBarangModel->updateStokBarang($id_barang, $qty);
        }
        header("Location: " . BASEURL . "/?controller=PeminjamanBarang");
        exit();

    }
}

?>
