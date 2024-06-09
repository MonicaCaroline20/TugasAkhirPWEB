<?php

class PeminjamanBarang extends Controller
{
    public function index($page = 1)
    {
        $data['judul'] = 'Peminjaman Barang';
        $data['folder'] = 'user/PeminjamanBarang';
        $data['style'] = 'PeminjamanBarang';

        $peminjamanBarangModel = $this->model('PinjamBarangModel');

        $itemsPerPage = 20;

        $totalItems = $peminjamanBarangModel->getTotalBarang();

        $totalPages = ceil($totalItems / $itemsPerPage);

        if ($page < 1) {
            $page = 1;
        } elseif ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
        }

        $start = ($page - 1) * $itemsPerPage;

        $data['barang'] = $peminjamanBarangModel->getAllBarang($start, $itemsPerPage);

        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];

        $this->view('user/templates/session');
        $this->view('user/templates/header', $data);
        $this->view('user/templates/navigasi');
        $this->view('user/peminjaman/peminjamanBarang', $data);
        $this->view('user/templates/footer');
        $this->view('user/templates/penutup');
    }

    
    public function batalPinjaman($id)
    {
        $pinjamBarangModel = $this->model('PinjamBarangModel');
        $success = $pinjamBarangModel->batalPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=PeminjamanBarang");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }
    public function kembalikanPinjaman($id)
    {
        $pinjamBarangModel = $this->model('PinjamBarangModel');
        $success = $pinjamBarangModel->kembalikanPinjaman($id);
        if ($success) {
            header("Location: " . BASEURL . "/?controller=PeminjamanBarang");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to cancel borrowing.']);
        }
    }
}

?>
