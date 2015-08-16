<?php

class Vehicles extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    public function get_vehicles_list()
    {
        $query = $this->db->get('tbl_product_services');
        return $query->result_array();
    }

    public function get_category_list()
    {
        $query = $this->db->get('tbl_product_category');
        return $query->result_array();
    }

    public function get_category_item($id)
    {
        $query = $this->db->get_where('tbl_product_category',array('id'=>$id));
        return $query->row_array();
    }

    public function add_category($data)
    {
        return $this->db->insert('tbl_product_category', $data);
    }

    public function update_category($data, $id)
    {
        $cond = array(
            'id' => $id
        );
        return $this->db->update('tbl_product_services', $data, $cond);
    }

    public function del_category($id)
    {
        return $this->db->delete('tbl_product_category', array('id' => $id));

    }

    public function add_product($data)
    {
        $this->db->insert('tbl_product_services', $data);
        $this->db->select('id');
        $this->db->from('tbl_product_services');
        $this->db->where('vehicle_name', $data['vehicle_name']);
        $query = $this->db->get();
        return $query->row_array();

    }

    public function add_product_image($data_image)
    {
        $this->db->insert('tbl_product_images', $data_image);
    }

    public function update_product($data, $id)
    {
        $cond = array(
            'id' => $id
        );
        return $this->db->update('tbl_product_services', $data, $cond);
    }

    public function product_item($id)
    {
        $query = $this->db->get_where('tbl_product_services', array('id' => $id));
        return $query->row_array();
    }

    public function product_image_item($id)
    {
        $query = $this->db->get_where('tbl_product_images', array('product_id' => $id));
        return $query->result_array();
    }

    public function set_status($id, $data)
    {
        $cond = array(
            'id' => $id
        );
        return $this->db->update('tbl_product_services', $data, $cond);
    }

    public function delete_product_image($image_name)
    {
        return $this->db->delete('tbl_product_services', array('images' => $image_name));
    }

    public function del_product($id)
    {
        $this->db->select('images');
        $this->db->from('tbl_product_services');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $this->db->delete('tbl_product_services', array('id' => $id));
        return $query->result_array();

    }
}
