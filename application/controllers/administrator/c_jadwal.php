<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_jadwal extends CI_Controller{

    public function index()
    {
        $data['jadwal'] = $this->jadwal_model->tampil_data('jadwal_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwalpelajaran',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data['pelajaran'] = $this->pelajaran_model->tampil_data('materi_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
            $kode_jadwal      = $this->input->post('kode_jadwal');
            $nama_jadwal      = $this->input->post('nama_jadwal');
            $kategori_jadwal  = $this->input->post('kategori_jadwal');
            $hari_jadwal      = $this->input->post('hari_jadwal');
            $jam_jadwal       = $this->input->post('jam_jadwal');
            $guru_jadwal      = $this->input->post('guru_jadwal');

            $data = array(
                'kode_jadwal'     => $kode_jadwal,
                'nama_jadwal'     => $nama_jadwal,
                'kategori_jadwal' => $kategori_jadwal,
                'hari_jadwal'     => $hari_jadwal,
                'jam_jadwal'      => $jam_jadwal,
                'guru_jadwal'     => $guru_jadwal,
            );

            $this->jadwal_model->input_data($data,'jadwal_pelajaran');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Jadwal Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_jadwal');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_jadwal','kode_jadwal','required',['required'  => 'Kode pelajaran wajib ada!']);
        $this->form_validation->set_rules('nama_jadwal','nama_jadwal','required',['required'  => 'Nama pelajaran wajib ada!']);
    }

    public function update($id)
    {
        $where = array('id_jadwal' => $id);
        $data['jadwal']    = $this->db->query("select * from jadwal_pelajaran japel, materi_pelajaran pel where japel.nama_jadwal=pel.nama_jadwal and japel.id_jadwal='$id'")->result();
        $data['pelajaran'] = $this->jadwal_model->tampil_data('materi_pelajaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id 			 = $this->input->post('id_jadwal');
        $kode_jadwal     = $this->input->post('kode_jadwal');
        $nama_jadwal     = $this->input->post('nama_jadwal');
        $kategori_jadwal = $this->input->post('kategori_jadwal');
        $hari_jadwal     = $this->input->post('hari_jadwal');
        $jam_jadwal      = $this->input->post('jam_jadwal');
        $guru_jadwal     = $this->input->post('guru_jadwal');

        $data = array(
            'kode_jadwal'       => $kode_jadwal,
            'nama_jadwal'       => $nama_jadwal,
            'kategori_jadwal'   => $kategori_jadwal,
            'hari_jadwal'       => $hari_jadwal,
            'jam_jadwal'        => $jam_jadwal,
            'guru_jadwal'       => $guru_jadwal
        );

        $where = array(
            'id_jadwal' => $id
        );

        $this->jadwal_model->update_data($where,$data,'jadwal_pelajaran');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_jadwal');
    }

    public function delete($id)
    {
        $where = array('id_jadwal' => $id);
        $this->jadwal_model->hapus_data($where,'jadwal_pelajaran');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_jadwal');
    }
}