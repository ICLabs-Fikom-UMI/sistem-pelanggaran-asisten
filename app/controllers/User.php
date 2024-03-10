<?php

class User extends Controller {
    public function index()
    {
        $data['title'] = 'Data User';
        $idUser = isset($_SESSION['ID_User']) ? $_SESSION['ID_User'] : null;
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
        
        if ($role == 'asisten' || $role == 'korlab') {
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

    // public function index()
    // {
    //     $data['title'] = 'Data User';
    //     $idUser = $_SESSION['ID_User'];
    //     // $_SESSION['ID_Asisten'] = $this->model('Asisten_model')->getIDAsistenByUserID($_SESSION['ID_User']);
    //     if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'korlab') {
    //         // $data['user'] = $this->model('User_model')->tampilDataUser();
    //         $data['user'] = $this->model('User_model')->tampilDataUser($idUser);

    //     } else {
    //         $data['user'] = $this->model('User_model')->tampil();
    //     }

    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('user/index', $data);
    //     $this->view('templates/footer');
    // }
    
    public function modalTambah()
    {
        $this->isAdmin();
        $this->view('user/tambah_data');
    }
    
    public function ubahModal(){
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('User_model')->ubah($id);

        $this->view('user/ubah_user', $data);
    }    
    public function tambah(){
        $this->isAdmin();
        if($this->model('User_model')->tambah($_POST) > 0){
            Flasher::setFlash(' berhasil ditambahkan', '', 'success');
        }else{
            Flasher::setFlash(' gagal ditambah', '', 'danger');
        }
        header('Location: '.BASEURL. '/user');
        exit;
    }
    public function prosesUbah(){
        if($this->model('User_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash(' berhasil diubah', '', 'success');
        }else{
            Flasher::setFlash(' gagal diubah', '', 'danger');
        }
        header('Location: '.BASEURL. '/user');
        exit;
    }
    public function hapus($id){
        $this->isAdmin();

        if($this->model('User_model')->prosesHapus($id)){
            Flasher::setFlash(' berhasil dihapus', '', 'success');
        }else{
            Flasher::setFlash(' gagal dihapus', '', 'danger');
        }
        header('Location: '.BASEURL. '/user');
        exit;
    }    
}
