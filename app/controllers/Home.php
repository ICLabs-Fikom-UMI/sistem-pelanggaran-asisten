<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Dasboard';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}   