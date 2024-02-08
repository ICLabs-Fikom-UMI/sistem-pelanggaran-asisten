<?php

class Jurusan extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('jurusan/tambah_data');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Jurusan_model')->ubah($id);

        $this->view('jurusan/ubah_jurusan', $data);
    }    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('Jurusan_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/jurusan');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('Jurusan_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/jurusan');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Jurusan_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/jurusan');
            exit;
        }
    }    
}
