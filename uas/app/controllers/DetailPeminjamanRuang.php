<?php

class DetailPeminjamanRuang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Detail Peminjaman Ruang';
        $data['folder'] = 'user/DetailPeminjaman';
        $data['style'] = 'DetailPeminjamanRuang';

        $createPinjamRuangModel = $this->model('CreatePinjamRuangModel');
        $data['ruangList'] = $createPinjamRuangModel->getRuangList();
        $data['stok'] = $createPinjamRuangModel->getStokInformation();


        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/detailPeminjaman/detailPeminjamanRuang', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }

    public function processForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $createPinjamRuangModel = $this->model('CreatePinjamRuangModel');

            $id_ruang = $_POST['id_ruang'];
            $qty = $_POST['qty'];
            $tgl_mulai = $_POST['tgl_mulai'];
            $tgl_selesai = $_POST['tgl_selesai'];
            $lokasi_ruang = $_POST['lokasi_ruang'];
            $id_user = $_POST['id_user'];
            $status = $_POST['status'];

            $userData = $createPinjamRuangModel->getUserData($id_user);

            if ($userData) {
                $newJumlahRuangDipinjam = $userData['jumlah_ruang_dipinjam'] + $qty;
    
                $createPinjamRuangModel->updateUserData($id_user, $newJumlahRuangDipinjam);
            }

            $createPinjamRuangModel->insertPinjamRuang([
                'id_ruang' => $id_ruang,
                'id_user' => $id_user,  
                'qty' => $qty,
                'tgl_mulai' => $tgl_mulai,
                'tgl_selesai' => $tgl_selesai,
                'lokasi_ruang' => $lokasi_ruang,
                'status' => $status,
            ]);

            $createPinjamRuangModel->updateStokRuang($id_ruang, $qty);
        }
        header("Location: " . BASEURL . "/?controller=PeminjamanRuang");
        exit();

    }
}

?>
