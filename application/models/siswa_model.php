<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_siswa($id_siswa)
    {
        $hasil = $this->db->where('id_siswa',$id_siswa)->get('siswa');

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
	
    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
	
}