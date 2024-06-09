<?php

class EditDataRuang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Edit Data Ruang';
        $data['folder'] = 'admin/EditDataRuang';
        $data['style'] = 'EditDataRuang';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['edit'])) {
                $nama = $_POST['nama'];
                $stok = $_POST['stok'];
                $status = $_POST['status'];

                $namaFoto = $_FILES['foto']['name'];
                $lokasiFoto = $_FILES['foto']['tmp_name'];
                $folderTujuan = 'public/img/daftarRuang/';

                $foto = $folderTujuan . $namaFoto;

                move_uploaded_file($lokasiFoto, $folderTujuan . $namaFoto);


                $EditDataRuangModel = $this->model('EditDataRuangModel');

                $editStatus = $EditDataRuangModel->updateDataRuang($id, $nama, $stok, $status, $foto);

                if ($editStatus) {
                    header('Location: ' . BASEURL . '/?controller=DaftarItem');
                    exit();
                } else {
                    echo 'error';
                }
            }
            
        }
        $this->view('admin/templates/session');
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/navigasi');
        $this->view('admin/editDataRuang/editDataRuang', $data);
        $this->view('admin/templates/penutup');
    }
}
?>
