<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami_page extends CI_Controller{

    public function index()
    {
        $data['identitas'] 	= $this->identitas_model->tampil_data('identitas')->result();
        $data['tentang'] 	= $this->tentang_model->tampil_data('tentang_sekolah')->result();
        $data['informasi']	= $this->informasi_model->tampil_data('informasi_sekolah')->result();
        $data['hubungi']	= $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('hubungi_kami_page',$data);
        $this->load->view('templates_administrator/footer');
    }
	
    public function kirim_pesan()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $id			        = $this->input->post('id_hubungi');
            $nama    			= $this->input->post('nama');
            $email    			= $this->input->post('email');
            $pesan  		  	= $this->input->post('pesan');

            $data = array(
                'nama'     => $nama,
                'email'    => $email,
                'pesan'    => $pesan,
            );

            $this->hubungi_model->insert_data($data,'hubungi');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pesan Berhasil di Kirim!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('hubungi_kami_page/index');
        }
    }
	
    public function _rules()
    {
        $this->form_validation->set_rules('nama','nama','required',['required' => 'Nama wajib di isi ya!']);
        $this->form_validation->set_rules('email','email','required',['required' => 'Email wajib di isi ya!']);
        $this->form_validation->set_rules('pesan','pesan','required',['required' => 'Pesan wajib di isi ya!']);
    }
	
}