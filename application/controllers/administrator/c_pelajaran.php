<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_pelajaran extends CI_Controller{

    public function index()
    {
        $data['pelajaran'] = $this->pelajaran_model->tampil_data('materi_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi_pelajaran',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
		$data['input_materi'] = $this->pelajaran_model->tampil_data('materi_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi_pelajaran_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
			$kode_jadwal		= $this->input->post('kode_jadwal');
			$nama_jadwal		= $this->input->post('nama_jadwal');
			$kategori_jadwal	= $this->input->post('kategori_jadwal');
			
            $data = array(
                'kode_jadwal'     => $kode_jadwal,
                'nama_jadwal'     => $nama_jadwal,
                'kategori_jadwal' => $kategori_jadwal,
            );

            $this->pelajaran_model->insert_data($data,'materi_pelajaran');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pelajaran Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_pelajaran');
        }
    }

    public function update($id)
    {
        $where = array('id_pelajaran' => $id);
        $data['pelajaran'] = $this->pelajaran_model->edit_data($where,'materi_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi_pelajaran_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_pelajaran');
        $kode_jadwal     = $this->input->post('kode_jadwal');
        $nama_jadwal     = $this->input->post('nama_jadwal');
        $kategori_jadwal = $this->input->post('kategori_jadwal');

        $data = array(
            'kode_jadwal'       => $kode_jadwal,
            'nama_jadwal'       => $nama_jadwal,
            'kategori_jadwal'   => $kategori_jadwal,
        );

        $where = array(
            'id_pelajaran' => $id
        );

        $this->pelajaran_model->update_data($where,$data,'materi_pelajaran');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_pelajaran');
    }

    public function delete($id)
    {
        $where = array('id_pelajaran' => $id);
        $this->pelajaran_model->hapus_data($where,'materi_pelajaran');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_pelajaran');
    }
	
    public function _rules()
    {
        $this->form_validation->set_rules('kode_jadwal','kode_jadwal','required',['required'  => 'Kode pelajaran wajib ada!']);
        $this->form_validation->set_rules('nama_jadwal','nama_jadwal','required',['required'  => 'Nama pelajaran wajib ada!']);
    }
	
}