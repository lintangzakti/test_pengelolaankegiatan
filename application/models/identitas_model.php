<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas_model extends CI_Model{

    public $table = 'identitas';
    public $id = 'id_identitas';

    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}