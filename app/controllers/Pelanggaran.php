<?php

class Pelanggaran extends Controller {
    // public function index()
    // {
    //     $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);
    //     // $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByAsistenID($_SESSION['ID_Asisten']);

    //     $data['title'] = 'Data Pelanggaran';
        
    //     if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') {
    //         $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAdminKorlab();
    //     } else {
    //         $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAsisten();
    //     }

    //     $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('pelanggaran/index', $data);
    //     $this->view('templates/footer');
    // }
    public function index(){
        $ID_User = isset($_SESSION['ID_User']) ? $_SESSION['ID_User'] : null;
        $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($ID_User);
        
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
        
        $data['title'] = 'Data Pelanggaran';
        
        $data['pelanggaran'] = array();
    
        if ($role && ($role == 'admin' || $role == 'korlab')) {
            $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAdminKorlab();
        } else {
            $idUser = isset($_SESSION['ID_User']) ? $_SESSION['ID_User'] : null;
            $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAsisten($idUser);
        }
    
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/index', $data);
        $this->view('templates/footer');
    }
    
    // public function index(){
        
    //     $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);
    //     $data['title'] = 'Data Pelanggaran';
        
    //     $idUser = isset($_SESSION['ID_User']) ? $_SESSION['ID_User'] : null;
        
    //     $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
        
    //     if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab')) {
    //         $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAdminKorlab();
    //     } else {
    //         $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampilDataPelanggaranAsisten($idUser);
    //     }

        
    //     $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('pelanggaran/index', $data);
    //     $this->view('templates/footer');
    // }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $this->view('pelanggaran/tambah_data', $data);
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Pelanggaran_model')->ubah($id);
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['asistenIDOptions'] = $this->model('Pelanggaran_model')->tampilIDAsisten();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $data['asistenDetail'] = $this->model('Asisten_model')->getAsistenById($data['ubahdata']['ID_Asisten']);
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
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();
    
        $data = [
            'pelanggaran' => $postData['pelanggaran'],
            'tanggal' => $postData['tanggal'],
            'ID_Asisten' => $asistenId['ID_Asisten'],
            'ID_TindakLanjut' => $postData['ID_TindakLanjut']
        ];
    
        if ($this->model('Pelanggaran_model')->tambah($data) > 0){
            Flasher::setFlash(' berhasil ditambahkan', '', 'success');
        }else{
            Flasher::setFlash(' gagal ditambahkan', '', 'danger');
        }
        header('Location: '.BASEURL. '/Pelanggaran');
        exit;
    }       
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        if($this->model('Pelanggaran_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash(' berhasil diubah', '', 'success');
        }else{
            Flasher::setFlash(' gagal diubah', '', 'danger');
        }
        header('Location: '.BASEURL. '/Pelanggaran');
        exit;
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Pelanggaran_model')->prosesHapus($id)){
            Flasher::setFlash(' berhasil dihapus', '', 'success');
        }else{
            Flasher::setFlash(' gagal dihapus', '', 'danger');
        }
        header('Location: '.BASEURL. '/Pelanggaran');
        exit;
    }
}