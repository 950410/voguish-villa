<?php

class Category extends CI_Model
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function category_add($data){
        $query=$this->db->insert('tbl_category',$data);
        return $query;
    }

    public function category_update($data,$id){
        $cond=array(
            'id'=>$id
        );
        $query=$this->db->update('tbl_category',$data,$cond);
        return $query;
    }

    public function get_category_list(){
        $query=$this->db->get('tbl_category');
        return $query->result_array();
    }
    public function get_category($id){
        $query=$this->db->get('tbl_category',array('id' => $id));
        return $query->row_array();
    }
    public function category_delete($id){
        $query=$this->db->delete('tbl_category', array('id' => $id));
        return $query;
    }


    public function get_content($type)
    {
        $query = $this->db->get_where('content',array('type'=>$type));
        return $query->result_array();
    }

    public function get_content_images()
    {
        $query = $this->db->get_where('content_images');
        return $query->result_array();
    }

    public function del_content()
    {
        return $this->db->delete('content', array('flag' => '1'));

    }

    public function del_content_image()
    {
        return $this->db->delete('content_images', array('flag' => '1'));
    }

    public function get_news()
    {
        $query = $this->db->get_where('content');
        return $query->result_array();
    }

    public function get_news_images()
    {
        $query = $this->db->get_where('content_images');
        return $query->result_array();

    }


    public function set_news($data)
    {
        $this->db->insert('content', $data);
        $this->db->select('id');
        $this->db->from('content');
        $this->db->where('title', $data['title']);
        $query = $this->db->get();
        return $query->row_array();

    }

    public function set_image($data_image)
    {
        return $this->db->insert('content_images', $data_image);
    }

    public function update_news($data,$id){
        $cond=array(
            'id'=>$id
        );
        $this->db->update('content', $data,$cond);
    }
    public function get_news_item($id){
        $query = $this->db->get_where('content', array('id'=> $id));
        return $query->row_array();
    }

    public function get_image_item($id){
        $query = $this->db->get_where('content_images', array('news_id'=> $id));
        return $query->result_array();
    }

    public function del_news($id)
    {
        $this->db->select('images');
        $this->db->from('content_images');
        $this->db->where('news_id',$id);
        $query=$this->db->get();
        $this->db->delete('content', array('id' => $id));
        return $query->result_array();

    }

    public function delete_image($image_name)
    {
        return $this->db->delete('content_images', array('images' => $image_name));
    }

    public function publish_news($id,$data){
        $cond=array(
            'id'=>$id
        );
        return $this->db->update('content', $data,$cond);

    }

}