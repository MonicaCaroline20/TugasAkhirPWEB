<?php
    class DaftarBarang extends Controller{
        public function index($page = 1){
            $data['judul'] = 'Daftar Barang';
            $data['folder'] = 'user/DaftarBarang';
            $data['style'] = 'DaftarBarang';

            $userModel = $this->model('Daftar_Barang');
   
            $itemsPerPage = 10;
            $totalItems = $userModel->getTotalBarang();
            $totalPages = ceil($totalItems / $itemsPerPage);

            if ($page < 1) {
                $page = 1;
            } elseif ($page > $totalPages && $totalPages > 0) {
                $page = $totalPages;
            }

            $start = ($page - 1) * $itemsPerPage;

            $data['barang'] = $userModel->getAllBarang($start, $itemsPerPage);

            $userModel->updateStatusIfZeroOrLess();
            $userModel->updateStatusIfGreaterThanZero();


            $data['pagination'] = [
                'currentPage' => $page,
                'totalPages' => $totalPages,
            ];

    
            $this->view('user/templates/session');
            $this->view('user/templates/header', $data);
            $this->view('user/templates/navigasi');
            $this->view('user/daftarBarang/daftarBarang', $data);
            $this->view('user/templates/footer');
            $this->view('user/templates/penutup');
        }
        
    }

?>