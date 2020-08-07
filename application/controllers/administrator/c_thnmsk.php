<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_thnmsk extends CI_Controller{

    public function index()
    {
        $data['tahun_masuk'] = $this->tahunmasuk_model->tampil_data('tahun_masuk')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_masuk',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tahun()
    {
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_masuk_form');
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tahun_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
        {
            $this->tambah_tahun();
        }else{
            $tahun_msk    = $this->input->post('tahun_msk');
            $semester     = $this->input->post('semester');
            $status       = $this->input->post('status');

            $data = array(
                'tahun_msk'          => $tahun_msk,
                'semester'           => $semester,
                'status'             => $status,
            );

            $this->tahunmasuk_model->input_data($data,'tahun_masuk');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Masuk Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_thnmsk');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tahun_msk','tahun_msk','required',['required'  => 'Tahun masuk harus di isi!']);
        $this->form_validation->set_rules('semester','semester','required',['required'  => 'Semester harus di isi!']);
        $this->form_validation->set_rules('status','status','required',['required'  => 'Status harus di isi!']);
    }

    public function update($id)
    {
        $where = array('id_thnmsk' => $id);
        $data['tahun_masuk'] = $this->tahunmasuk_model->edit_data($where,'tahun_masuk')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_masuk_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_thnmsk');
        $tahun_msk       = $this->input->post('tahun_msk');
        $semester        = $this->input->post('semester');
        $status          = $this->input->post('status');

        $data = array(
            'tahun_msk' => $tahun_msk,
            'semester'  => $semester,
            'status'    => $status,
        );

        $where = array(
            'id_thnmsk' => $id
        );

        $this->tahunmasuk_model->update_data($where,$data,'tahun_masuk');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Sudah Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_thnmsk');
    }

    public function delete($id)
    {
        $where = array('id_thnmsk' => $id);
        $this->tahunmasuk_model->hapus_data($where,'tahun_masuk');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Sudah Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_thnmsk');
    }
}