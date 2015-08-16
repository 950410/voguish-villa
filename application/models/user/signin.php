<?php

class Signin extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_username($username, $password)
    {
        $this->db->select('admin_name');

        $this->db->from('tbl_admin_login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();


        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }

    }
}