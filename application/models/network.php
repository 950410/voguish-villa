<?php

Class Network extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    public function get_branches_list()
    {
        $query = $this->db->get('tbl_branch_locations');
        return $query->result_array();
    }

    public function get_network_address()
    {
        $query = $this->db->get('tbl_network_address');
        return $query->result_array();
    }

    public function branches_item($id)
    {
        $query = $this->db->get_where('tbl_branch_locations', array('id' => $id));
        return $query->row_array();
    }

    public function address_item($id)
    {
        $query = $this->db->get_where('tbl_network_address', array('location_id' => $id));
        return $query->result_array();
    }

    public function get_network_list()
    {
        $query = $this->db->get('tbl_branch_network');
        return $query->result_array();
    }

    public function network_item($id)
    {
        $query = $this->db->get_where('tbl_network_address', array('location_id' => $id));
        return $query->result_array();
    }

    public function add_branches_location($data)
    {
        $this->db->insert('tbl_branch_locations', $data);
        $this->db->select('id');
        $this->db->from('tbl_branch_locations');
        $this->db->where('location', $data['location']);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_network_address($data)
    {
        return $this->db->insert('tbl_network_address', $data);
    }

    public function update_branches_location($data, $id)
    {
        $cond = array(
            'id' => $id
        );
        return $this->db->update('tbl_branch_locations', $data, $cond);
    }

    public function update_network_address($data,$id,$network_id )
    {
        $cond = array(
            'network_id' => $network_id,
            'location_id' => $id

        );
        return $this->db->update('tbl_network_address', $data, $cond);
    }

    public function remove_network($id)
    {
        return $this->db->delete('tbl_network_address',array('id'=>$id));
    }

    public function add_network($data)
    {
        return $this->db->insert('tbl_branch_network', $data);
    }

    public function update_network($data, $id)
    {
        $cond = array(
            'id' => $id
        );
        return $this->db->update('tbl_branch_network', $data, $cond);
    }

    Public function del_network($id)
    {
        return $this->db->delete('tbl_branch_network', array('id' => $id));
    }


}