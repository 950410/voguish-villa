<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Items_model extends CI_Model {

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }
    public function get_all() {
        return $this->db->get( 'tbl_product' )->result();
    }
    public function get( $id ) {
        $r = $this->db->where( 'id', $id )->get( 'tbl_product' )->result();
        if ( $r ) return $r[0];
        return false;
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