<?php

class Commercial_vehicles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('vehicles');
    }

    public function index()
    {

        $data['products'] = $this->vehicles->get_vehicles_list();
        $data['categories'] = $this->vehicles->get_category_list();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/vehicles/product_list');
        $this->load->view('admin/footer');

    }

    public function product_category()
    {
        $data['categories'] = $this->vehicles->get_category_list();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/vehicles/category_list');
        $this->load->view('admin/footer');

    }

    public function category_form()
    {
        $id = $this->uri->segment(4);
        if ($id == '') {
            $data['category_items'] = array(
                'id' => '',
                'category' => ''
            );
            $topic = array('topic' => 'create category ');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/vehicles/add_category_form',$data);
            $this->load->view('admin/footer');
        } else {
            $data['category_items'] = $this->vehicles->get_category_item($id);

            $topic = array('topic' => 'update');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/vehicles/add_category_form', $data);
            $this->load->view('admin/footer');
        }

    }

    public function update_category_form()
    {
        $ids = array('id' => $this->input->post('id'));
        $id = $ids['id'];
        $data = array(
            'category' => $this->input->post('category')
        );

        if ($id == "")
        {
            $this->session->set_flashdata('message', 'ADDED');
            $this->vehicles->add_category($data);

            redirect('admin/commercial_vehicles/product_category');
        }
        else
        {
            $this->session->set_flashdata('message', 'UPDATED');
            $this->vehicles->update_category($data, $id);

            redirect('admin/commercial_vehicles/product_category');
        }
    }

    public function delete_category()
    {
        $id = $this->uri->segment(4);
        $this->vehicles->del_category($id);

        $this->session->set_flashdata('message', 'DELETED');
        redirect('admin/commercial_vehicles/product_category');
    }

    public function form()
    {
// if ($this->session->userdata('logged_in')) {
        $id = $this->uri->segment(4);
        $data['categories'] = $this->vehicles->get_category_list();

        if ($id == '') {
            $data['product_items'] = array(
                'id' => '',
                'vehicle_name' => '',
                'category' => '',
                'images' => '',
                'status' => '',
            );
            $topic = array('topic' => 'create form ');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/vehicles/form', $data);
            $this->load->view('admin/footer');
        } else {
            $data['product_items'] = $this->vehicles->product_item($id);

            $topic = array('topic' => 'update');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/vehicles/form', $data);
            $this->load->view('admin/footer');

        }

        /* } else {
             $this->session->set_flashdata('message', 'You are not logged in.Please log in');
             redirect('admin/login_manager');
         }*/

    }

    public function update_form()
    {
        //if ($this->session->userdata('logged_in')) {
        foreach ($_FILES['files']['name'] as $image) {
            if ($image == "") {
                $this->load->helper('url');

                $this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');

                if ($this->form_validation->run() === FALSE) {
                    $topic = array('topic' => 'form', 'value' => 1);

                    $this->load->view('admin/header', $topic);
                    $this->load->view('admin/commercial_vehicles/form');
                    $this->load->view('admin/footer');

                } else {

                    $ids = array('id' => $this->input->post('id'));
                    $id = $ids['id'];
                    $data = array(
                        'vehicle_name' => $this->input->post('vehicle_name'),
                        'category_id' => $this->input->post('category'),
                        'images'=>$this->input->post('image'),
                        'status' => $this->input->post('status')
                    );

                    if ($id == "") {
                        $this->session->set_flashdata('message', 'ADDED');
                        $this->vehicles->add_product($data);

                        redirect('admin/commercial_vehicles');
                    } else {
                        $this->session->set_flashdata('message', 'UPDATED');
                        $this->vehicles->update_product($data, $id);

                        redirect('admin/commercial_vehicles');
                    }
                }
            } else {

                $this->load->helper('url');

                $ids = array('id' => $this->input->post('id'));
                $id = $ids['id'];

                $this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');

                if ($this->form_validation->run() === FALSE) {
                    $topic = array('topic' => 'form', 'value' => 1);

                    $this->load->view('admin/header', $topic);
                    $this->load->view('admin/commercial_vehicles/form');
                    $this->load->view('admin/footer');

                } else {

                    $this->load->library('upload');

                    $this->upload->initialize(array(
                        "file_name" => array(),
                        "upload_path" => './images/tatamotors',
                        "allowed_types" => 'gif|jpg|png'
                    ));

                   /* $data = array(
                        'vehicle_name' => $this->input->post('vehicle_name'),
                        'category_id' => $this->input->post('category'),
                        'status' => $this->input->post('status')
                    );*/

                    if (!$this->upload->do_multi_upload("files")) {
                        $error = array('error' => $this->upload->display_errors());
                        $error_msg = $error['error'];
                        $this->session->set_flashdata('message', $error_msg);
                        redirect('admin/commercial_vehicles/form');

                    } else {
                        $images = $this->upload->get_multi_upload_data();
                        if ($id == "") {
                            $this->session->set_flashdata('message', 'ADDED');
                            $product_id = $this->vehicles->add_product($data);

                            foreach ($images as $image_name) {
                                $data = array(
                                    'vehicle_name' => $this->input->post('vehicle_name'),
                                    'category_id' => $this->input->post('category'),
                                    'status' => $this->input->post('status'),
                                    'images' => $image_name['file_name']

                                );
                                $this->vehicles->add_product($data);
                            }
                            redirect('admin/commercial_vehicles');

                        } else {
                            $this->session->set_flashdata('message', 'UPDATED');
                            $this->news->update_news($data, $id);
                            foreach ($images as $image_name) {
                                $data = array(
                                    'vehicle_name' => $this->input->post('vehicle_name'),
                                    'category_id' => $this->input->post('category'),
                                    'status' => $this->input->post('status'),
                                    'images' => $image_name['file_name']

                                );
                                $this->vehicles->add_product($data);
                            }
                            redirect('admin/commercial_vehicles');
                        }
                    }
                }
            }
        }
        /* } else {

             $this->session->set_flashdata('message', 'You are not logged in.Please log in');
             redirect('admin/news_manager/login');

         }*/
    }

    public function delete()
    {
//if ($this->session->userdata('logged_in')) {
        $id = $this->uri->segment(4);
        $images['name'] = $this->vehicles->del_product($id);
        foreach ($images['name'] as $image) {
            unlink('images/tatamotors' . $image['product_images']);
        }

        redirect('admin/commercial_vehicles');

        /* } else {
             $this->session->set_flashdata('message', 'You are not logged in.Please log in');
             redirect('admin/news_manager/login');
         }*/
    }


    public function set_product_status()
    {
        //if ($this->session->userdata('logged_in')) {
        $id = $this->uri->segment(4);
        $result = $this->vehicles->product_item($id);
        if ($result['status'] == "PUBLISH") {
            $data = array(
                'status' => "UNPUBLISH"
            );
            $set_status = $this->vehicles->set_status($id, $data);
            $a = array(
                'action' => 'Success',
                'status' => 'publish'
            );
        } else {
            $data = array(
                'status' => "PUBLISH"
            );
            $set_status = $this->vehicles->set_status($id, $data);
            $a = array(
                'action' => 'Success',
                'status' => 'unpublish'
            );
        }

        if ($set_status) {
            echo json_encode($a);
        } else {
            echo "Error";
        }
        /* } else {
             $this->session->set_flashdata('message', 'You are not logged in.Please log in');
             redirect('admin/news_manager/login');
         }*/
    }

    public function delete_product_image()
    {
        //if ($this->session->userdata('logged_in')) {
        $image_name = $this->uri->segment(4);
        unlink('images/tatamotors' . $image_name);
        $delete = $this->vehicles->delete_product_image($image_name);
        if ($delete) {
            echo "Success";
        } else {
            echo "Error";
        }
        /*} else {
            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/news_manager/login');
        }*/
    }

    public function view_branch_list()
    {
        $this->load->view('admin/header');
        //$this->load->view('admin/vehicles/product_list');
        $this->load->view('admin/footer');
    }

}