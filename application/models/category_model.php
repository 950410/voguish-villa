<?php
class Category_model extends CI_Model{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function category_add($data){
        $query=$this->db->insert('tbl_category',$data);
        return $query;
    }
    public function get_category_list(){
        $query=$this->db->get('tbl_category');
        return $query->result_array();
    }
    public function category_delete($data){
        $query=$this->db->delete('tbl_category', array('id' => $data));
        return $query;
    }
    public function subcategory_add($data){
        $query=$this->db->insert('tbl_subcategory',$data);
        return $query;
    }
    public function get_subcategory_list(){
        $query = $this->db->get_where('tbl_subcategory');
        return $query->result_array();
    }

}
