<?php

class Persetujuan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Persetujuan';
        $data['folder'] = 'admin/Persetujuan';
        $data['style'] = 'Persetujuan';
        $persetujuanModel = $this->model('PersetujuanModel');

        $data['users'] = $persetujuanModel->getAllUsers();

        $this->view('admin/templates/session');
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/navigasi');
        $this->view('admin/persetujuan/persetujuan', $data);
        $this->view('admin/templates/penutup');
    }

    public function kembaliPinjaman($id)
    {
        $persetujuanModel = $this->model('PersetujuanModel');
        $success = $persetujuanModel->kembaliPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=Persetujuan");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }

    public function approveRequest($id) {
        $persetujuanModel = $this->model('PersetujuanModel');
        $persetujuanModel->approveRequest($id);

        header("Location: " . BASEURL . "/?controller=Persetujuan");
        exit();
    }

    public function rejectRequest($id) {
        $PersetujuanModel = $this->model('PersetujuanModel');
        $PersetujuanModel->rejectRequest($id);

        header("Location: " . BASEURL . "/?controller=Persetujuan");
        exit();
    }
}
?>
