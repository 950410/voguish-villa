<?php

class Image_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    public function get_gallery_images()
    {
        $query = $this->db->get('gallery');
        return $query->result_array();
    }

    public function set_image($data_image)
    {
        return $this->db->insert('gallery', $data_image);
    }

    public function delete_image($image_name)
    {

        return $this->db->delete('gallery', array('images' => $image_name));
    }

    public function get_banner_images()
    {
        $query = $this->db->get_where('gallery', array('banner' => '1'));
        return $query->result_array();
    }
    public function get_images($id)
    {
        $query = $this->db->get_where('gallery',array('id'=>$id));
        return $query->row_array();
    }

    public function set_banner_images($id, $data)
    {
            $cond = array(
                'id' => $id
            );
           return $this->db->update('gallery', $data, $cond);
    }
}