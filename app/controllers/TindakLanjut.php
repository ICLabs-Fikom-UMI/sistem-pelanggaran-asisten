<?php

class TindakLanjut extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Tindak Lanjut';
        $data['tindakLanjut'] = $this->model('TindakLanjut_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('tindakLanjut/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        $this->view('tindakLanjut/tambah_data');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('TindakLanjut_model')->ubah($id);

        $this->view('tindakLanjut/ubah_tindakLanjut', $data);
    }
    public function detailtindakLanjut($id){
        $this->isAdminOrKorlab();
        $data['title'] = 'Detail Data Jenis Kelakuan';
        $data['detail_tindakLanjut'] = $this->model('TindakLanjut_model')->detailtindakLanjut($id);
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('tindakLanjut/detail_tindakLanjut', $data);
        $this->view('templates/footer');
    }
    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('TindakLanjut_model')->tambah($_POST) > 0){
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('TindakLanjut_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }
    // public function hapus($id){
    //     $this->isAdminOrKorlab();
    //     $deleteLab = $this->model('TindakLanjut_model')->prosesHapus($id);

        // if ($deleteLab > 0) {
        //     Flasher::setFlash('berhasil', 'dihapus', 'success');
        //     header('Location: '.BASEURL. '/tindakLanjut');
        //     exit;
        // }
        // else {
        //     Flasher::setFlash('gagal', 'dihapus', 'danger');
        //     header('Location: '.BASEURL. '/tindakLanjut');
        //     exit;
        // }
    // }    
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('TindakLanjut_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }    
}
