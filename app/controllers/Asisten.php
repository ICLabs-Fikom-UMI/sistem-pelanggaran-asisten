<?php

class Asisten extends Controller {
    public function index()
    {
        $this->isAdmin();
        $data['title'] = 'Data Asisten';
        $data['asisten'] = $this->model('Asisten_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdmin();
        $data['title'] = 'Tambah Data Asisten';

        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/tambah_data', $data);
        $this->view('templates/footer');
    }
    public function ubahModal()
    {
        $this->isAdmin();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Asisten_model')->ubah($id);

        $this->view('asisten/ubah_asisten', $data);
    }
    public function detailAsisten($id){
        $this->isAdmin();
        $data['title'] = 'Detail Data Asisten';
        $data['detail_asisten'] = $this->model('Asisten_model')->detailAsisten($id);
        // PERCOBAAN
        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/detail_asisten', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->isAdmin();
            $data['availableUserIDs'] = $this->model('Asisten_model')->getAvailableUserIDs();
    
            $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
            $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
            $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
            $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
            $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
            $this->view('asisten/index', $data);
    
            if($this->model('Asisten_model')->tambah($_POST) > 0){
                header('Location: '.BASEURL. '/Asisten');
                exit;
            }
        }
    }
    // public function tambah(){
    //     if($this->model('Asisten_model')->tambah($_POST) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Asisten');
    //         exit;
    //     }
    // }
    // public function tambah(){
    //     $this->isAdmin();
    //     $data['availableUserIDs'] = $this->model('Asisten_model')->getAvailableUserIDs();
    //     $this->view('asisten/tambah', $data);
    //     if($this->model('Asisten_model')->tambah($_POST) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Asisten');
    //         exit;
    //     }
    // }
    // public function tambah() {
    //     $postData = $_POST;
    //     $asistenInfo = explode(' - ', $postData['selectAsisten']);
    //     $asistenInfo = explode(' - ', $postData['selectKelas']);
    //     $asistenInfo = explode(' - ', $postData['selectAngkatan']);
    //     $asistenInfo = explode(' - ', $postData['selectJurusan']);
    //     $asistenInfo = explode(' - ', $postData['selectStatus']);
    //     $asistenInfo = explode(' - ', $postData['selectUser']);
    
    //     $asistenId = $this->model('Asisten_model')->getAsistenIdByStambuk($asistenInfo[0]);
    
    //     $data = [
    //         'stambuk' => $postData['stambuk'],
    //         'nama' => $postData['nama'],
    //         'jenis_kelamin' => $postData['jenis_kelamin'],
    //         'no_telp' => $postData['no_telp'],
    //         'ID_Kelas' => $postData['ID_Kelas'],
    //         'ID_Angkatan' => $postData['ID_Angkatan'],
    //         'ID_Asisten' => $asistenId['ID_Asisten'], 
    //         'ID_jenisKelakuan' => $postData['ID_jenisKelakuan']
    //     ];
    
    //     if ($this->model('Pelanggaran_model')->tambah($data) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Asisten');
    //         exit;
    //     }
    // }
    
    public function prosesUbah(){
        $this->isAdmin();
        if($this->model('Asisten_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: '.BASEURL. '/Asisten');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdmin();
        if($this->model('Asisten_model')->prosesHapus($id)){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL. '/Asisten');
            exit;
        }
    }    
}
