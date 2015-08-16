<?php

class Front_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_setting()
    {
        $query = $this->db->get('setting');
        return $query->row_array();
    }

    public function get_all_news()
    {
        $this->db->order_by("time", "desc");
        $query = $this->db->get_where('content',array('publish' => 'on'));
        return $query->result_array();
    }

    public function get_all_product()
    {
        $query = $this->db->get('tbl_product_services');
        return $query->result_array();
    }

    public function get_all_categories()
    {
        $query = $this->db->get('tbl_product_category');
        return $query->result_array();
    }


    public function get_banner_images()
    {
        $query = $this->db->get_where('gallery', array('banner' => 1));
        return $query->result_array();

    }

    public function get_featured_news()
    {
        $this->db->select('*');
        $this->db->where('featured_news', 'on');
        $this->db->where('publish', 'on');
        $this->db->from('content');
        $this->db->limit(2);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            return $query->result_array();
        } else {
            return false;
        }

    }

    public function get_content_images()
    {
        $query = $this->db->get_where('content_images');
        return $query->result_array();
    }

    public function get_news($slug)
    {
        $query = $this->db->get_where('content', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_images($id)
    {
        $query = $this->db->get_where('content_images', array('news_id' => $id));
        return $query->row_array();
    }
    public function get_news_images($id)
    {
        $query = $this->db->get_where('content_images', array('news_id' => $id));
        return $query->result_array();
    }

    public function subscribe($data, $sub)
    {
        $query1 = $this->db->get_where('subscribers', array('subscribers' => $sub));
        if ($query1) {
            return "error";
        }
        return $this->db->insert('subscribers', $data);
    }
}