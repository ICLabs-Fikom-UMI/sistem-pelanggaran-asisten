<?php

class Notifikasi extends Controller {
    public function index(){
        // $this->isAdminOrKorlab();
        // $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);

        $data['title'] = 'Data Notifikasi';
        
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') {
            $data['notifikasi'] = $this->model('Notifikasi_model')->tampilDataNotifikasiAdminKorlab();
        } else {
            $data['notifikasi'] = $this->model('Notifikasi_model')->tampilDataNotifikasiAsisten();
        }

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('notifikasi/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Notifikasi_model')->tampilAsisten();

        $this->view('notifikasi/tambah_data', $data);
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Notifikasi_model')->ubah($id);
        $data['asistenOptions'] = $this->model('Notifikasi_model')->tampilAsisten();

        $data['asistenDetail'] = $this->model('Asisten_model')->getAsistenById($data['ubahdata']['ID_Asisten']);

        $this->view('notifikasi/ubah_notifikasi', $data);
    }
    public function tampil() {
        $data['title'] = 'Data Notifikasi';
        $data['notifikasi'] = $this->model('Notifikasi_model')->tampilDataNotifikasi();
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('notifikasi/index', $data);
        $this->view('templates/footer');
    }
    public function tambah() {
        $this->isAdminOrKorlab();
        $postData = $_POST;
        $asistenInfo = explode(' - ', $postData['selectAsisten']);
    
        $asistenId = $this->model('Asisten_model')->getAsistenIdByNama($asistenInfo[0]);
        $data['asistenOptions'] = $this->model('Notifikasi_model')->tampilAsisten();
    
        $data = [
            'pesan' => $postData['pesan'],
            'tanggal' => $postData['tanggal'],
            'ID_Asisten' => $asistenId['ID_Asisten'],
            'ID_TindakLanjut' => $postData['ID_TindakLanjut']
        ];
    
        if ($this->model('Notifikasi_model')->tambah($data) > 0){
            header('Location: '.BASEURL. '/Notifikasi');
            exit;
        }
    }    
    
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Notifikasi_model')->tampilAsisten();
        if($this->model('Notifikasi_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/Notifikasi');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Notifikasi_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/Notifikasi');
            exit;
        }
    }
}