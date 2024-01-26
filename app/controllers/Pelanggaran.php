<?php

class Pelanggaran extends Controller {
    public function index()
    {
        $data['title'] = 'Data Pelanggaran';
        $data['pelanggaran'] = $this->model('Pelanggaran_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $data['title'] = 'Tambah Data Pelanggaran';
        $data['asistenOptions'] = $this->model('Pelanggaran_model')->tampilAsisten();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/tambah_data', $data);
        $this->view('templates/footer');
    }
    public function ubahModal()
    {
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Pelanggaran_model')->ubah($id);

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
        $postData = $_POST;
        $asistenInfo = explode(' - ', $postData['selectAsisten']);
    
        // Dapatkan ID_Asisten berdasarkan Stambuk
        $asistenId = $this->model('Asisten_model')->getAsistenIdByStambuk($asistenInfo[0]);
    
        $data = [
            'detail_pelanggaran' => $postData['detail_pelanggaran'],
            'tanggal' => $postData['tanggal'],
            'ID_Asisten' => $asistenId['ID_Asisten'], // Gunakan ID_Asisten yang didapatkan
            'ID_jenisKelakuan' => $postData['ID_jenisKelakuan']
        ];
    
        if ($this->model('Pelanggaran_model')->tambah($data) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    
    
    public function prosesUbah(){
        if($this->model('Pelanggaran_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Pelanggaran_model')->prosesHapus($id)){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL. '/Pelanggaran');
            exit;
        }
    }    
}
