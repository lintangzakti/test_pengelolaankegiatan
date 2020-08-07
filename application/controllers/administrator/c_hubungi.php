<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_hubungi extends CI_Controller{
	
	public function index(){	
		$data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hubungi_kami',$data);
		$this->load->view('templates_administrator/footer');
	}
	
	public function kirim_email($id){
		$where = array('id_hubungi' => $id);
		$data['hubungi'] = $this->hubungi_model->kirim_data($where,'hubungi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/form_kirim_email',$data);
		$this->load->view('templates_administrator/footer');
	}
	
	public function kirim_email_aksi()
	{
		$to_email	= $this->input->post('email');
		$subject	= $this->input->post('subject');
		$message	= $this->input->post('pesan');
		

		$config = Array(
			'mailtype' 	=> 'html',
			'charset' 	=> 'utf-8',
			'protocol'	=> 'smtp',
			'smtp_host'	=> 'ssl://smtp.gmail.com',
			'smtp_user'	=> 'shura.zakti97@gmail.com',
			'smtp_pass'	=> 'QWEasdzxc1312!@(lin)',
			'smtp_post'	=> 465,
			'crlf'		=> "\r\n",
			'newline'	=> "\r\n",
		);
		
		$this->load->library('email',$config);
		
		$this->email->from('shura.zakti97@gmail.com','Lintang');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		
		if($this->email->send())
		{
			$this->session->set_flashdata('pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				Pesan terkirim ya!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('administrator/c_hubungi');
		}else{
			$this->session->set_flashdata('pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Pesan tidak terkirim!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('administrator/c_hubungi');
		}
	}
	
    public function delete($id)
    {
        $where = array('id_hubungi' => $id);
        $this->hubungi_model->hapus_data($where,'hubungi');
        
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil di Hapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/c_hubungi');
    }
}