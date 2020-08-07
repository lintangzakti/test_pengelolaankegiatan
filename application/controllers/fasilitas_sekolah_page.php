<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_sekolah_page extends CI_Controller{

    public function index()
    {
        $data['identitas'] 	= $this->identitas_model->tampil_data('identitas')->result();
        $data['tentang'] 	= $this->tentang_model->tampil_data('tentang_sekolah')->result();
        $data['informasi']	= $this->informasi_model->tampil_data('informasi_sekolah')->result();
        $data['hubungi']	= $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('fasilitas_sekolah_page',$data);
        $this->load->view('templates_administrator/footer');
    }
}