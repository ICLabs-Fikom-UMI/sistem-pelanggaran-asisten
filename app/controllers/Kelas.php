<?php

class Kelas extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->model('Kelas_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('kelas/tambah_data');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Kelas_model')->ubah($id);

        $this->view('kelas/ubah_kelas', $data);
    }    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('Kelas_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/kelas');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('Kelas_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/kelas');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Kelas_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/kelas');
            exit;
        }
    }    
}
