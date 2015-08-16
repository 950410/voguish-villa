<?php
class Homepage_controller extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('form','url'));
        $this->load->model('category_model');


    }

    public function index()
    {
        $result['data']=$this->category_model->get_category_list();
        $this->load->view('header');
        $this->load->view('home',$result);
        $this->load->view('footer');
    }

}