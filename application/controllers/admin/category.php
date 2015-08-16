<?php

class Category extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('category_model');

    }

    public function index()
    {
        $result['category'] = $this->category_model->get_category_list();
        $result['sub_category']=$this->category_model->get_subcategory_list();
        $this->load->view('admin/header', $result);
        $this->load->view('admin/category/view_category');
        $this->load->view('admin/footer');
    }

    public function add_category_form()
    {
        $result['category'] = $this->category_model->get_category_list();
        $this->load->view('admin/header');
        $this->load->view('admin/category/add_new_category',$result);
        $this->load->view('admin/footer');
    }

    public function add_category()
    {
        $value= $this->input->post('cat_id');
        if ($value=="root") {
            $data = array(
                'name' => $this->input->post('category_name'));//pass category name to model category
            $result = $this->category_model->category_add($data);//pass value to model function
        }
        else
        {
            $data=array (
                'subcategory_name'=> $this->input->post('category_name'),
                'category_id'=>$this->input->post('cat_id')
            );
            $result=$this->category_model->subcategory_add($data);
        }
            if ($result) {
            redirect('admin/category');
        }

    }

    public function delete_category()
    {
        $id = $this->uri->segment(4);

        $result = $this->category_model->category_delete($id);//pass value to model function
        if ($result) {
            echo "The category has been deleted!";
        } else {
            echo "Error!!!";
        }

    }
}
