<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['folder'] = 'admin/Dashboard';
        $data['style'] = 'Dashboard';

        $dashboardModel = $this->model('DashboardModel');
        $data['users'] = $dashboardModel->getAllUsers();
        $data['userCount'] = $dashboardModel->countRegisteredUsers();
        $data['itemCount'] = $dashboardModel->countTotalBarang();
        $data['roomCount'] = $dashboardModel->countTotalRuang();
        $data['borrowCount'] = $dashboardModel->countTotalPinjam();

        $this->view('admin/templates/session');
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/navigasi');
        $this->view('admin/dashboard/dashboard', $data);
        $this->view('admin/templates/penutup');
    }
}
?>
