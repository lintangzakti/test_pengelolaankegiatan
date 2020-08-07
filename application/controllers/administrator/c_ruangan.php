<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_ruangan extends CI_Controller{

    public function index()
    {
        $data['ruangan'] = $this->gedung_model->tampil_data('ruangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ruangan',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
		$data['input_ruangan'] = $this->gedung_model->tampil_data('ruangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ruangan_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
		{
            $this->input();
        }else{
			$kode_ruangan 	= $this->input->post('kode_ruangan');
			$nama_gedung 	= $this->input->post('nama_gedung');
			$nama_ruangan 	= $this->input->post('nama_ruangan');
			$kapasitas 		= $this->input->post('kapasitas');			
			$keterangan 	= $this->input->post('keterangan');			

            $data = array(
				'kode_ruangan'  => $kode_ruangan,
				'nama_gedung'  	=> $nama_gedung,
				'nama_ruangan'  => $nama_ruangan,
				'kapasitas'   	=> $kapasitas,
				'keterangan'	=> $keterangan,
            );

            $this->ruangan_model->input_data($data,'ruangan');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Ruangan Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_ruangan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_ruangan','kode_ruangan','required',['required'  => 'Nama kode ruangan wajib ada!']);
        $this->form_validation->set_rules('nama_gedung','nama_gedung','required',['required'  => 'Nama gedung wajib ada!']);
    }

    public function update($id)
    {
        $where = array('id_ruangan' => $id);
        $data['update_ruangan'] = $this->ruangan_model->edit_data($where,'ruangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ruangan_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id         	= $this->input->post('id_ruangan');
        $kode_ruangan 	= $this->input->post('kode_ruangan');
        $nama_gedung 	= $this->input->post('nama_gedung');
        $nama_ruangan 	= $this->input->post('nama_ruangan');
        $kapasitas		= $this->input->post('kapasitas');
        $keterangan 	= $this->input->post('keterangan');

        $data = array(
            'id_ruangan'    => $id_ruangan,
			'kode_ruangan'  => $kode_ruangan,
			'nama_gedung'  	=> $nama_gedung,
			'nama_ruangan'  => $nama_ruangan,
			'kapasitas'   	=> $kapasitas,
			'keterangan'	=> $keterangan,
        );

        $where = array(
            'id_ruangan' => $id
        );

        $this->ruangan_model->update_data($where,$data,'ruangan');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Gedung Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_ruangan');
    }

    public function delete($id)
    {
        $where = array('id_ruangan' => $id);
        $this->gedung_model->hapus_data($where,'ruangan');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Ruangan Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_ruangan');
    }
}