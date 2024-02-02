<?php

class Pelanggaran extends Controller {
    public function index()
    {
        $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);

        $data['title'] = 'Data Pelanggaran';
        
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') {
            $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAdminKorlab();
        } else {
            $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAsisten();
        }

        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $this->view('pelanggaran/tambah_data', $data);
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Pelanggaran_model')->ubah($id);
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $data['asistenDetail'] = $this->model('Asisten_model')->getAsistenById($data['ubahdata']['ID_Asisten']);
        $data['jkDetail'] = $this->model('Pelanggaran_model')->getJenisKelakuanDetailById($data['ubahdata']['ID_JenisKelakuan']);
        $data['tindaklanjutDetail'] = $this->model('Pelanggaran_model')->getTindakLanjutDetailById($data['ubahdata']['ID_TindakLanjut']);

        $this->view('pelanggaran/ubah_pelanggaran', $data);
    }
    public function tampil() {
        $data['title'] = 'Data Pelanggaran';
        $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaran();
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/index', $data);
        $this->view('templates/footer');
    }
    public function tambah() {
        $this->isAdminOrKorlab();
        $postData = $_POST;
        $asistenInfo = explode(' - ', $postData['selectAsisten']);
    
        $asistenId = $this->model('Asisten_model')->getAsistenIdByStambuk($asistenInfo[0]);
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();
    
        $data = [
            'pelanggaran' => $postData['pelanggaran'],
            'tanggal' => $postData['tanggal'],
            'ID_Asisten' => $asistenId['ID_Asisten'], // 
            'ID_JenisKelakuan' => $postData['ID_JenisKelakuan'],
            'ID_TindakLanjut' => $postData['ID_TindakLanjut']
        ];
    
        if ($this->model('Pelanggaran_model')->tambah($data) > 0){
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    
    
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        if($this->model('Pelanggaran_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Pelanggaran_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
}