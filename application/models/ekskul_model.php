<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul_model extends CI_Model{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function input_data($data)
    {
        $this->db->insert('ekskuls',$data);
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

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getDataPagination($limit, $offset)
    {
         $this->db->select('*');
         $this->db->from('ekskul');
         $this->db->order_by('id_eks', 'ASC');
         $this->db->limit($limit, $offset);
    
         return $this->db->get();
    }
}