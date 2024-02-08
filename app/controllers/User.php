<?php

class User extends Controller {
    public function index()
    {
        // $this->isAdminOrKorlab();
        $data['title'] = 'Data User';
        // $data['user'] = $this->model('User_model')->tampil();
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') {
            $data['user'] = $this->model('User_model')->tampil();
        } else {
            $data['user'] = $this->model('User_model')->tampilDataUser();
        }

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('user/tambah_data');
    }
    
    public function ubahModal()
    {
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('User_model')->ubah($id);

        $this->view('user/ubah_user', $data);
    }    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('User_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/user');
            exit;
        }
    }
    public function prosesUbah(){
        if($this->model('User_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/user');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('User_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/user');
            exit;
        }
    }    
}
