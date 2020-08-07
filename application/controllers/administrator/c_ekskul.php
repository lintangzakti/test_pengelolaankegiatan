<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_ekskul extends CI_Controller{

    public function index()
    {
        $data['c_ekskul'] = $this->ekskul_model->tampil_data('ekskuls')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ekskul',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_eks'    => set_value('id_eks'),
            'nama_eks'    => set_value('nama_eks'),
            'hari'        => set_value('hari'),
            'jam_masuk'   => set_value('jam_masuk'),
            'jam_keluar'  => set_value('jam_keluar'),
            'keterangan'  => set_value('keterangan'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ekskul_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
            $data = array(
                'nama_eks'       => $this->input->post('nama_eks',TRUE),
                'hari'           => $this->input->post('hari',TRUE),
                'jam_masuk'      => $this->input->post('jam_masuk',TRUE),
                'jam_keluar'     => $this->input->post('jam_keluar',TRUE),
                'keterangan'     => $this->input->post('keterangan',TRUE),
            );

            $this->ekskul_model->input_data($data);
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pelajaran Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_ekskul');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_eks','nama_eks','required',['required'  => 'Nama ekskul wajib ada!']);
        $this->form_validation->set_rules('hari','hari','required',['required'  => 'Nama pelajaran wajib ada!']);
    }

    public function update($id)
    {
        $where = array('id_eks' => $id);
        $data['c_ekskul'] = $this->ekskul_model->edit_data($where,'ekskuls')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/ekskul_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id         = $this->input->post('id_eks');
        $nama_eks   = $this->input->post('nama_eks');
        $hari       = $this->input->post('hari');
        $jam_masuk  = $this->input->post('jam_masuk');
        $jam_keluar = $this->input->post('jam_keluar');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'nama_eks'    => $nama_eks,
            'hari'        => $hari,
            'jam_masuk'   => $jam_masuk,
            'jam_keluar'  => $jam_keluar,
            'keterangan'  => $keterangan,
        );

        $where = array(
            'id_eks' => $id
        );

        $this->ekskul_model->update_data($where,$data,'ekskuls');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_ekskul');
    }

    public function delete($id)
    {
        $where = array('id_eks' => $id);
        $this->ekskul_model->hapus_data($where,'ekskuls');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_ekskul');
    }
}