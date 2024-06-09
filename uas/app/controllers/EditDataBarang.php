<?php

class EditDataBarang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Edit Data Barang';
        $data['folder'] = 'admin/EditDataBarang';
        $data['style'] = 'EditDataBarang';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['edit'])) {
                $nama = $_POST['nama'];
                $stok = $_POST['stok'];
                $status = $_POST['status'];

                $namaFoto = $_FILES['foto']['name'];
                $lokasiFoto = $_FILES['foto']['tmp_name'];
                $folderTujuan = 'public/img/daftarBarang/';

                $foto = $folderTujuan . $namaFoto;

                move_uploaded_file($lokasiFoto, $folderTujuan . $namaFoto);


                $EditDataBarangModel = $this->model('EditDataBarangModel');

                $editStatus = $EditDataBarangModel->updateDataBarang($id, $nama, $stok, $status, $foto);

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
        $this->view('admin/editDataBarang/editDataBarang');
        $this->view('admin/templates/penutup');
    }
}
?>
