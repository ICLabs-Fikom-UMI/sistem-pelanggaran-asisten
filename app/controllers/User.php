<?php

class User extends Controller {
    public function index()
    {
        $data['title'] = 'Data User';
        $idUser = $_SESSION['ID_User'];
        // $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);
        if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'korlab') {
            // $data['user'] = $this->model('User_model')->tampilDataUser();
            $data['user'] = $this->model('User_model')->tampilDataUser($idUser);

        } else {
            $data['user'] = $this->model('User_model')->tampil();
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
