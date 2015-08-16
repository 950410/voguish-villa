<?php

class Product extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('shopping_model');
        $this->load->model('category_model');

    }

    public function index()
    {
        $result['product'] = $this->shopping_model->get_product_list_array();
        $this->load->view('admin/header', $result);
        $this->load->view('admin/product/view_product');
        $this->load->view('admin/footer');
    }

    public function add_product_form()
    {$result['category'] = $this->category_model->get_category_list();
        $result['product'] = $this->shopping_model->get_product_list_array();
        $this->load->view('admin/header');
        $this->load->view('admin/product/add_new_product',$result);
        $this->load->view('admin/footer');
    }

    public function add_product()
    {
        $value= $this->input->post('cat_id');
        if ($value=="root") {
            $data = array(
                'name' => $this->input->post('product_name'),);//pass category name to model category
            $result = $this->_model->category_add($data);//pass value to model function
        }
        else
        {
            $data=array (
                'subcategory_name'=> $this->input->post('category_name'),
                'category_id'=>$this->input->post('cat_id')
            );
            $result=$this->shopping_model->subcategory_add($data);
        }
        if ($result) {
            redirect('admin/category');
        }

    }

    public function delete_product()
    {
        $id = $this->uri->segment(4);

        $result = $this->shopping_model->product_delete($id);//pass value to model function
        if ($result) {
            echo "The product has been deleted!";
        } else {
            echo "Error!!!";
        }

    }
}
