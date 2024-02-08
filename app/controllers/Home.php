<?php

class Home extends Controller {
    public function index(){
        $data['title'] = 'Dasboard';
        // $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_Asisten']);
        $data['jumlahDataPelanggaranPer6Bulan'] = $this->model('Pelanggaran_model')->jumlahDataPelanggaranPer6Bulan();
    
        $data['jumlahDataAsisten'] = $this->model('Asisten_model')->jumlahDataAsisten();
        $data['jumlahDataTindakLanjut'] = $this->model('TindakLanjut_model')->jumlahDataTindakLanjut();    

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}