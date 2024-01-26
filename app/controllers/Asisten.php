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
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/detail_asisten', $data);
        $this->view('templates/footer');
    }
    
    // public function tambah(){
    //     if($this->model('Asisten_model')->tambah($_POST) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: '.BASEURL. '/Asisten');
    //         exit;
    //     }
    // }
    public function tambah(){
        $this->isAdmin();
        $data['availableUserIDs'] = $this->model('Asisten_model')->getAvailableUserIDs();
        $this->view('asisten/tambah', $data);
        if($this->model('Asisten_model')->tambah($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. '/Asisten');
            exit;
        }
    }
    
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
