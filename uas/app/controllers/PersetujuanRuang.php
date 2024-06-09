<?php

class PersetujuanRuang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Persetujuan';
        $data['folder'] = 'admin/PersetujuanRuang';
        $data['style'] = 'PersetujuanRuang';
        $persetujuanRuangModel = $this->model('PersetujuanRuangModel');

        $data['users'] = $persetujuanRuangModel->getAllUsers();

        $this->view('admin/templates/session');
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/navigasi');
        $this->view('admin/persetujuanRuang/persetujuanRuang', $data);
        $this->view('admin/templates/penutup');
    }

    public function kembaliPinjaman($id)
    {
        $persetujuanRuangModel = $this->model('PersetujuanRuangModel');
        $success = $persetujuanRuangModel->kembaliPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=PersetujuanRuang");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }

    public function approveRequest($id) {
        $persetujuanRuangModel = $this->model('PersetujuanRuangModel');
        $persetujuanRuangModel->approveRequest($id);

        header("Location: " . BASEURL . "/?controller=PersetujuanRuang");
        exit();
    }

    public function rejectRequest($id) {
        $PersetujuanRuangModel = $this->model('PersetujuanRuangModel');
        $PersetujuanRuangModel->rejectRequest($id);

        header("Location: " . BASEURL . "/?controller=PersetujuanRuang");
        exit();
    }
}
?>
