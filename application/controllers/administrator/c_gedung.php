<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_gedung extends CI_Controller{

    public function index()
    {
        $data['gedung'] = $this->gedung_model->tampil_data('gedung')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/gedung',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
		$data['input_gedung'] = $this->gedung_model->tampil_data('gedung')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/gedung_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
		{
            $this->input();
        }else{
			$kode_gedung 	= $this->input->post('kode_gedung');
			$nama_gedung 	= $this->input->post('nama_gedung');
			$jum_lantai 	= $this->input->post('jum_lantai');
			$keterangan 	= $this->input->post('keterangan');			

            $data = array(
				'kode_gedung'  => $kode_gedung,
				'nama_gedung'  => $nama_gedung,
				'jum_lantai'   => $jum_lantai,
				'keterangan'	=> $keterangan,
            );

            $this->gedung_model->input_data($data,'gedung');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Gedung Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_gedung');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_gedung','kode_gedung','required',['required'  => 'Nama kode gedung wajib ada!']);
        $this->form_validation->set_rules('nama_gedung','nama_gedung','required',['required'  => 'Nama gedung wajib ada!']);
    }

    public function update($id)
    {
        $where = array('id_gedung' => $id);
        $data['update_gedung'] = $this->gedung_model->edit_data($where,'gedung')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/gedung_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id         = $this->input->post('id_gedung');
        $kode_gedung = $this->input->post('kode_gedung');
        $nama_gedung = $this->input->post('nama_gedung');
        $jum_lantai = $this->input->post('jum_lantai');
        $keterangan 	= $this->input->post('keterangan');

        $data = array(
            'id_gedung'    => $id_gedung,
			'kode_gedung'  => $kode_gedung,
			'nama_gedung'  => $nama_gedung,
			'jum_lantai'   => $jum_lantai,
			'keterangan'	=> $keterangan,
        );

        $where = array(
            'id_gedung' => $id
        );

        $this->gedung_model->update_data($where,$data,'gedung');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Gedung Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_gedung');
    }

    public function delete($id)
    {
        $where = array('id_gedung' => $id);
        $this->gedung_model->hapus_data($where,'gedung');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gedung Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_gedung');
    }
}