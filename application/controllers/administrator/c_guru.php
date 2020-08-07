<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_guru extends CI_Controller{

    public function index(){
        $data['guru'] = $this->dataguru_model->tampil_data('guru')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/guru',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_guru)
    {
        $data['detail'] = $this->dataguru_model->ambil_id_guru($id_guru);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/guru_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_guru()
    {
        $data['guru'] = $this->dataguru_model->tampil_data('guru')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/guru_form',$data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function tambah_guru_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_guru();
        }else{
            $nama_guru      = $this->input->post('nama_guru');
            $no_nip         = $this->input->post('no_nip');
            $alamat         = $this->input->post('alamat');
            $nohp           = $this->input->post('nohp');
            $tempat_lahir   = $this->input->post('tempat_lahir');
            $tgl_lahir      = $this->input->post('tgl_lahir');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $tahun_masuk    = $this->input->post('tahun_masuk');
            $photo          = $_FILES['photo'];
            if($photo=''){}else{
                $config['upload_path']   = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('photo')){
                    echo "Gagal Upload Photo"; die();
                }else{
                    $photo=$this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_guru'      => $nama_guru,
                'no_nip'         => $no_nip,
                'alamat'         => $alamat,
                'nohp'           => $nohp,
                'tempat_lahir'    => $tempat_lahir,
                'tgl_lahir'       => $tgl_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'tahun_masuk'     => $tahun_masuk,
                'photo'           => $photo
            );

            $this->dataguru_model->insert_data($data,'guru');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_guru');
        }
    }

    public function update($id_guru)
    {
        $where = array('id_guru' => $id_guru);
        $data['guru'] = $this->dataguru_model->tampil_data('guru')->result();
        $data['detail'] = $this->dataguru_model->ambil_id_guru($id_guru);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/guru_update',$data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function update_guru_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
        {
            $this->update();
        }else{
            $id_guru        = $this->input->post('id_guru');
            $nama_guru      = $this->input->post('nama_guru');
            $no_nip         = $this->input->post('no_nip');
            $alamat         = $this->input->post('alamat');
            $nohp           = $this->input->post('nohp');
            $tempat_lahir    = $this->input->post('tempat_lahir');
            $tgl_lahir       = $this->input->post('tgl_lahir');
            $jenis_kelamin   = $this->input->post('jenis_kelamin');
            $tahun_masuk     = $this->input->post('tahun_masuk');
            $photo           = $_FILES['userfile']['name'];

            if($photo){
                $config['upload_path']   = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);
                if($this->upload->do_upload('userfile')){
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('photo',$userfile);
                }else{
                    echo "Gagal upload";
                }
            }

            $data = array(
                'nama_guru'      => $nama_guru,
                'no_nip'         => $no_nip,
                'alamat'         => $alamat,
                'nohp'           => $nohp,
                'tempat_lahir'    => $tempat_lahir,
                'tgl_lahir'       => $tgl_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'tahun_masuk'     => $tahun_masuk
            );

            $where = array(
                'id_guru' => $id_guru
            );

            $this->dataguru_model->update_data($where,$data,'guru');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru Berhasil di Perbarui!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_guru');
        }
    }

    public function delete($id_guru)
    {
        $where = array('id_guru' => $id_guru);
        $this->dataguru_model->hapus_data($where,'guru');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Guru Sudah Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_guru');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_guru','nama_guru','required',['required' => 'Nama guru wajib di isi']);
        $this->form_validation->set_rules('no_nip','no_nip','required',['required' => 'Nomer NIP wajib di isi']);
        $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat tinggal wajib di isi']);
        $this->form_validation->set_rules('nohp','nohp','required',['required' => 'Nomer handphone wajib di isi']);
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',['required' => 'Tempat lahir wajib di isi']);
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required',['required' => 'Tanggal lahir wajib di isi']);
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'Jenis kelamin wajib di isi']);
        $this->form_validation->set_rules('tahun_masuk','tahun_masuk','required',['required' => 'Tahun masuk wajib di isi']);
    }
}