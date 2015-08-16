<?php
class Shopping_model extends CI_Model {
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function get_product_list() {
        return $this->db->get( 'tbl_product' )->result();
    }
    public function get_product_list_array() {
        $query= $this->db->get( 'tbl_product' );
        return $query->result_array();
    }

    public function get_product_list_id( $id ) {
        $r = $this->db->where( 'id', $id )->get( 'tbl_product' )->result();
        if ( $r ) return $r[0];
        return false;
    }

    public function customer_add($data){
        $query=$this->db->insert('tbl_customer',$data);
        return $query;
    }
    public function address_add($data){
        $query=$this->db->insert('tbl_address',$data);
        return $query;
    }
    public function product_add($data){
        $query=$this->db->insert('tbl_product',$data);
        return $query;
    }
    public function product_delete($data){
        $query=$this->db->delete('tbl_product', array('id' => $data));
        return $query;
    }
    public function get_customer_list() {
        $query=$this->db->get('tbl_customer');
        return $query->result_array();
    }
    public function setup_payment( $item_id, $email, $key ) {
        $data = array(
            'item_id'  => $item_id,
            'key'      => $key,
            'email'    => $email,
            'active'   => 0 // hasn't been purchased yet
        );
        $this->db->insert( 'purchases', $data );
    }
    public function confirm_payment( $key, $paypal_email) {
        $data = array(
            'purchased_at'  => time(),
            'active'        => 1,
            'paypal_email'  => $paypal_email,

        );
        $this->db->where( 'key', $key );
        $this->db->update( 'purchases', $data );
    }

    public function get_purchase_by_key( $key ) {
        $r = $this->db->where( 'key', $key )->get( 'purchases' )->result();
        if ( $r ) return $r[0];
        return false;
    }

}
