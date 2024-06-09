<?php

class PeminjamanRuang extends Controller
{
    public function index($page = 1)
    {
        $data['judul'] = 'Peminjaman Ruang';
        $data['folder'] = 'user/PeminjamanRuang';
        $data['style'] = 'PeminjamanRuang';

        $peminjamanRuangModel = $this->model('PinjamRuangModel');

        $itemsPerPage = 20;

        $totalItems = $peminjamanRuangModel->getTotalRuang();

        $totalPages = ceil($totalItems / $itemsPerPage);

        if ($page < 1) {
            $page = 1;
        } elseif ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
        }

        $start = ($page - 1) * $itemsPerPage;

        $data['ruang'] = $peminjamanRuangModel->getAllRuang($start, $itemsPerPage);

        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];

        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/peminjaman/peminjamanRuang', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }

    
    public function batalPinjaman($id)
    {
        $pinjamRuangModel = $this->model('PinjamRuangModel');
        $success = $pinjamRuangModel->batalPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=PeminjamanRuang");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }

    public function kembalikanPinjaman($id)
    {
        $pinjamRuangModel = $this->model('PinjamRuangModel');
        $success = $pinjamRuangModel->kembalikanPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=PeminjamanRuang");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }

}

?>
