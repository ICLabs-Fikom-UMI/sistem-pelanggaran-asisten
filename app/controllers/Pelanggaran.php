<?php

class Pelanggaran extends Controller {
    public function index()
    {
        $data['title'] = 'Data Pelanggaran';
        $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampil();
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
        $data['title'] = 'Tambah Data Pelanggaran';
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/tambah_data', $data);
        $this->view('templates/footer');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Pelanggaran_model')->ubah($id);
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        $data['TindakLanjutOptions'] = $this->model('Pelanggaran_model')->tampilTindakLanjut();

        // Selain itu, dapatkan informasi detail untuk ID yang dipilih
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
    
    
    // public function tambah(){
    //     if($this->model('Pelanggaran_model')->tambah($_POST) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Pelanggaran');
    //         exit;
    //     }
    // }
    // public function tambah(){
    //     $postData = $_POST;
    //     $asistenInfo = explode(' - ', $postData['selectAsisten']);
    
    //     $data = [
    //         'detail_pelanggaran' => $postData['detail_pelanggaran'],
    //         'tanggal' => $postData['tanggal'],
    //         'stambuk' => $asistenInfo[0], 
    //         'ID_jenisKelakuan' => $postData['ID_jenisKelakuan']
    //     ];
    
    //     if ($this->model('Pelanggaran_model')->tambah($data) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Pelanggaran');
    //         exit;
    //     }
    // }
    public function tambah() {
        $this->isAdminOrKorlab();
        $postData = $_POST;
        $asistenInfo = explode(' - ', $postData['selectAsisten']);
    
        // Dapatkan ID_Asisten berdasarkan Stambuk
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
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    
    
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();
        $data['jkOptions'] = $this->model('Pelanggaran_model')->tampilJK();
        if($this->model('Pelanggaran_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Pelanggaran_model')->prosesHapus($id)){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }    
}
