<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_informasi extends CI_Controller{

    public function index(){
        $data['informasi'] = $this->informasi_model->tampil_data('informasi_sekolah')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/informasi_sekolah',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_murid)
    {
        $data['detail'] = $this->murida_model->ambil_id_murid($id_murid);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/murida_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_informasi()
    {
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/informasi_sekolah_form');
        $this->load->view('templates_administrator/footer'); 
    }

    public function tambah_informasi_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_informasi();
        }else{
            $id_informasi       = $this->input->post('id_informasi');
            $icon    			= $this->input->post('icon');
            $judul_informasi    = $this->input->post('judul_informasi');
            $isi_informasi    	= $this->input->post('isi_informasi');

            $data = array(
                'id_informasi'     => $id_informasi,
                'icon'    		   => $icon,
                'judul_informasi'  => $judul_informasi,
                'isi_informasi'    => $isi_informasi,
            );

            $this->informasi_model->insert_data($data,'informasi_sekolah');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Murid Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_informasi');
        }
    }

    public function update($id)
    {
        $where = array('id_informasi' => $id);
		$data['informasi'] = $this->informasi_model->edit_data($where,'informasi_sekolah')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/informasi_sekolah_update',$data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function update_informasi_aksi()
    {
        $this->_rules();
		
        if($this->form_validation->run() == FALSE)
        {
            $this->update();
        }else{
            $id			        = $this->input->post('id_informasi');
            $icon    			= $this->input->post('icon');
            $judul_informasi    = $this->input->post('judul_informasi');
            $isi_informasi    	= $this->input->post('isi_informasi');

            $data = array(
                'icon'    		   => $icon,
                'judul_informasi'  => $judul_informasi,
                'isi_informasi'    => $isi_informasi,
            );

            $where = array(
                'id_informasi' => $id
            );

            $this->informasi_model->update_data($where,$data,'informasi_sekolah');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Informasi Berhasil di Perbarui!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_informasi');
        }
    }

    public function delete($id)
    {
        $where = array('id_informasi' => $id);
        $this->informasi_model->hapus_data($where,'informasi_sekolah');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_informasi');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('icon','icon','required',['required' => 'Icon wajib di isi']);
        $this->form_validation->set_rules('judul_informasi','judul_informasi','required',['required' => 'Judul informasi wajib di isi']);
        $this->form_validation->set_rules('isi_informasi','isi_informasi','required',['required' => 'Isi informasi wajib di isi']);
    }
}