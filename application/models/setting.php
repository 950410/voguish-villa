<?php
class Setting extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
    public function get_subscribers(){
        $query=$this->db->get('subscribers');
        return $query->result_array();
    }

    public function get_setting_list(){
        $query=$this->db->get('setting');
        return $query->row_array();
    }

    public function set_setting_data($data){

        $this->db->update('setting', $data);

    }

}