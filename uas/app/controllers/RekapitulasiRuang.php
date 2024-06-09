<?php

    class RekapitulasiRuang extends Controller{

        public function index($page = 1){
            $data['judul'] = 'Rekapitulasi Ruang';
            $data['folder'] = 'user/Rekapitulasi';
            $data['style'] = 'Rekapitulasi';

            $userId = $_SESSION['user_id'];
            $userModel = $this->model('RekapitulasiRuangModel');
   
            $itemsPerPage = 10;
            $totalItems = $userModel->getTotalRekapitulasi($userId);
            $totalPages = ceil($totalItems / $itemsPerPage);

            if ($page < 1) {
                $page = 1;
            } elseif ($page > $totalPages && $totalPages > 0) {
                $page = $totalPages;
            }

            $start = ($page - 1) * $itemsPerPage;

            $data['rekapitulasiruang'] = $userModel->getAllRekapitulasi($userId, $start, $itemsPerPage);


            $data['pagination'] = [
                'currentPage' => $page,
                'totalPages' => $totalPages,
            ];

            $this->view('user/templates/session');
            $this->view('user/templates/header', $data);
            $this->view('user/templates/navigasi');
            $this->view('user/rekapitulasi/rekapitulasiRuang', $data);
            $this->view('user/templates/footer');
            $this->view('user/templates/penutup');

        }

    }