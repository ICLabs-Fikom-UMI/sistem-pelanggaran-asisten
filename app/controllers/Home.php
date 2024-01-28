<?php

class Home extends Controller {
    public function index()
    {
        // $this->isAdminOrKorlab();
        $data['title'] = 'Dasboard';
        $data['jumlahDataPelanggaran'] = $this->model('Pelanggaran_model')->jumlahDataPelanggaran();
        $data['jumlahDataAsisten'] = $this->model('Asisten_model')->jumlahDataAsisten();
        $data['jumlahDataJenisKelakuan'] = $this->model('JK_model')->jumlahDataJenisKelakuan();
        $data['jumlahDataTindakLanjut'] = $this->model('TindakLanjut_model')->jumlahDataTindakLanjut();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}   