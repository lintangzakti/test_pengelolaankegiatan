<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller{

    public function index(){
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/siswa',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_siswa)
    {
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/siswa_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_siswa()
    {
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/siswa_form',$data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function tambah_siswa_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_siswa();
        }else{
            $nama_siswa      = $this->input->post('nama_siswa');
            $alamat          = $this->input->post('alamat');
            $nohp            = $this->input->post('nohp');
            $tempat_lahir    = $this->input->post('tempat_lahir');
            $tgl_lahir       = $this->input->post('tgl_lahir');
            $jenis_kelamin   = $this->input->post('jenis_kelamin');
            $tahun_masuk     = $this->input->post('tahun_masuk');
            $photo           = $_FILES['photo'];
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
                'nama_siswa'      => $nama_siswa,
                'alamat'          => $alamat,
                'nohp'            => $nohp,
                'tempat_lahir'    => $tempat_lahir,
                'tgl_lahir'       => $tgl_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'tahun_masuk'     => $tahun_masuk,
                'photo'           => $photo
            );

            $this->siswa_model->insert_data($data,'siswa');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_siswa');
        }
    }

    public function update_data($id_siswa)
    {
        $where = array('id_siswa' => $id_siswa);
		$data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/siswa_update',$data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function update_siswa_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
        {
            $this->update_data();
        }else{
            $id_siswa        = $this->input->post('id_siswa');
            $nama_siswa      = $this->input->post('nama_siswa');
            $alamat          = $this->input->post('alamat');
            $nohp            = $this->input->post('nohp');
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
                'nama_siswa'      => $nama_siswa,
                'alamat'    => $alamat,
                'nohp'        => $nohp,
                'tempat_lahir'    => $tempat_lahir,
                'tgl_lahir'       => $tgl_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'tahun_masuk'     => $tahun_masuk
            );

            $where = array(
                'id_siswa' => $id_siswa
            );

            $this->siswa_model->update_data($where,$data,'siswa');
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa Berhasil di Perbarui!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('administrator/c_siswa');
        }
    }

    public function delete($id)
    {
        $where = array('id_siswa' => $id);
        $this->siswa_model->hapus_data($where,'siswa');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_siswa');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_siswa','nama_siswa','required',['required' => 'Nama siswa wajib di isi']);
        $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat tinggal wajib di isi']);
        $this->form_validation->set_rules('nohp','nohp','required',['required' => 'Nomer handphone wajib di isi']);
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',['required' => 'Tempat lahir wajib di isi']);
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required',['required' => 'Tanggal lahir wajib di isi']);
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'Jenis kelamin wajib di isi']);
        $this->form_validation->set_rules('tahun_masuk','tahun_masuk','required',['required' => 'Tahun masuk wajib di isi']);
    }
}