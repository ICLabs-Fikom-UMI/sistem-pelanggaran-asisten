<?php

class TindakLanjut extends Controller {
    public function index()
    {
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
        $data['title'] = 'Tambah Data Data Tindak Lanjut';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('tindakLanjut/tambah_data', $data);
        $this->view('templates/footer');
    }
    public function ubahModal()
    {
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('TindakLanjut_model')->ubah($id);

        $this->view('tindakLanjut/ubah_tindakLanjut', $data);
    }
    public function detailtindakLanjut($id){
        $data['title'] = 'Detail Data Jenis Kelakuan';
        $data['detail_tindakLanjut'] = $this->model('TindakLanjut_model')->detailtindakLanjut($id);
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('tindakLanjut/detail_tindakLanjut', $data);
        $this->view('templates/footer');
    }
    
    public function tambah(){
        if($this->model('TindakLanjut_model')->tambah($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }
    public function prosesUbah(){
        if($this->model('TindakLanjut_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('TindakLanjut_model')->prosesHapus($id)){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL. '/tindakLanjut');
            exit;
        }
    }    
}
