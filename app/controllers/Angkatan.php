<?php

class Angkatan extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Angkatan';
        $data['angkatan'] = $this->model('Angkatan_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('angkatan/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('angkatan/tambah_data');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Angkatan_model')->ubah($id);

        $this->view('angkatan/ubah_angkatan', $data);
    }    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('Angkatan_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/angkatan');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('Angkatan_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/angkatan');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Angkatan_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/angkatan');
            exit;
        }
    }    
}
