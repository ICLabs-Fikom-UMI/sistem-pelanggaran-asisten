<?php

class Status extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Status';
        $data['status'] = $this->model('Status_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('status/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('status/tambah_data');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Status_model')->ubah($id);

        $this->view('status/ubah_status', $data);
    }    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('Status_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/status');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('Status_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/status');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('Status_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/status');
            exit;
        }
    }    
}
