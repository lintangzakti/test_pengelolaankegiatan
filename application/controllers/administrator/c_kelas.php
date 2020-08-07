<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller{

    public function index()
    {
        $data['kelas'] = $this->kelas_model->tampil_data('kelas')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
		$data['input_kelas'] = $this->kelas_model->tampil_data('kelas')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
		{
            $this->input();
        }else{
			$kode_kelas = $this->input->post('kode_kelas');
			$nama_kelas = $this->input->post('nama_kelas');
			$wali_kelas = $this->input->post('wali_kelas');
			$ruangan 	= $this->input->post('ruangan');
			$gedung 	= $this->input->post('gedung');
			$jumlah_siswa 	= $this->input->post('jumlah_siswa');			

            $data = array(
				'kode_kelas'  => $kode_kelas,
				'nama_kelas'  => $nama_kelas,
				'wali_kelas'  => $wali_kelas,
				'ruangan'	  => $ruangan,
				'gedung'	  => $gedung,
				'jumlah_siswa'	  => $jumlah_siswa,
            );

            $this->kelas_model->input_data($data,'kelas');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Kelas Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_kelas');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_kelas','kode_kelas','required',['required'  => 'Nama kode kelas wajib ada!']);
        $this->form_validation->set_rules('nama_kelas','nama_kelas','required',['required'  => 'Nama kelas wajib ada!']);
        $this->form_validation->set_rules('wali_kelas','wali_kelas','required',['required'  => 'Nama wali kelas wajib ada!']);
    }

    public function update($id)
    {
        $where = array('id_kelas' => $id);
        $data['update_kelas'] = $this->kelas_model->edit_data($where,'kelas')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id         = $this->input->post('id_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $wali_kelas = $this->input->post('wali_kelas');
        $ruangan 	= $this->input->post('ruangan');
        $gedung 	= $this->input->post('gedung');
        $jumlah_siswa 	= $this->input->post('jumlah_siswa');

        $data = array(
            'id_kelas'    => $id_kelas,
            'kode_kelas'  => $kode_kelas,
            'nama_kelas'  => $nama_kelas,
            'wali_kelas'  => $wali_kelas,
            'ruangan'	  => $ruangan,
            'gedung'	  => $gedung,
            'jumlah_siswa'	  => $jumlah_siswa,
        );

        $where = array(
            'id_kelas' => $id
        );

        $this->kelas_model->update_data($where,$data,'kelas');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Perbarui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_kelas');
    }

    public function delete($id)
    {
        $where = array('id_kelas' => $id);
        $this->kelas_model->hapus_data($where,'kelas');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_kelas');
    }
}