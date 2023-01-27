<?php

class about extends CI_Controller {

    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = $nama;
        $this->load->view('templates/header');
        $this->load->view('about/about');
        $this->load->view('templates/footer');
    }

}
