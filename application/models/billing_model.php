<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
     // Get all details ehich store in "products" table in database.
        public function get_all()
	{
		$query = $this->db->get('tbl_product');
		return $query->result_array();
	}
    
    // Insert customer details in "customer" table in database.
	public function add_customer($data)
	{
		$this->db->insert('tbl_customer', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function add_order($data)
	{
		$this->db->insert('tbl_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function add_order_detail($data)
	{
		$this->db->insert('tbl_orderdetails', $data);
	}
       
}