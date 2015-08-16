<?php
class Image_manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('image_model');
        $this->load->model('news');
    }

    public function index()
    {
        //if ($this->session->userdata('logged_in')) {
            $data['images'] = $this->image_model->get_gallery_images();
            $data['banner'] = '0';

            $this->load->view('admin/header', $data);
            $this->load->view('admin/gallery/images');
            $this->load->view('admin/footer');
        /*} else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/
    }

    public function add_image()
    {
        //if ($this->session->userdata('logged_in')) {

            $this->load->view('admin/header');
            $this->load->view('admin/gallery/image_form');
            $this->load->view('admin/footer');
       /* } else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/
    }


    public function update_image()
    {
        //if ($this->session->userdata('logged_in')) {
            $this->load->helper('url');

                $this->load->library('upload');

                $this->upload->initialize(array(
                    "file_name" => array(),
                    "upload_path" => './images/',
                    "allowed_types" => 'gif|jpg|png'
                ));

                if (!$this->upload->do_multi_upload("files")) {
                    $error = array('error' => $this->upload->display_errors());
                    $error_msg = $error['error'];
                    $this->session->set_flashdata('message', $error_msg);
                    redirect('admin/image_manager/add_image');

                } else {
                    $images = $this->upload->get_multi_upload_data();

                    $this->session->set_flashdata('message', 'Your news has been added');
                    foreach ($images as $image_name) {
                        $data_image = array(
                            'images' => $image_name['file_name'],
                            'description'=> $this->input->post('description')
                        );
                        $this->image_model->set_image($data_image);

                    }
                    redirect('admin/image_manager');
            }
        /*} else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/

    }
    function delete_image()
    {
        //if ($this->session->userdata('logged_in')) {
            $image_name = $this->uri->segment(4);
            unlink('images/' . $image_name);
            $delete = $this->image_model->delete_image($image_name);
            if ($delete) {
                $this->session->set_flashdata('message', 'Your image has been deleted');
                redirect('admin/image_manager');
            } else {
                $this->session->set_flashdata('message', 'Unable to delete image');
                redirect('admin/image_manager');
            }
       /* } else {
            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/news_manager/login');
        }*/
    }


    public function update_banner_image(){
        $id=$this->uri->segment(4);
        $result['images']=$this->image_model->get_images($id);
        if($result['images']['banner']==1){
            $data = array(
                'banner' => 0
            );
            $set_image = $this->image_model->set_banner_images($id, $data);
            $a=array(
                'status'=>'Success',
                'action'=>'remove'
                );
        }
        else{
            $data = array(
                'banner' => 1
            );
            $set_image = $this->image_model->set_banner_images($id, $data);
            $a=array(
                'status'=>'Success',
                'action'=>'add'
            );
        }
        if ($set_image) {
            echo json_encode($a);
        } else {
            echo "Error";
        }

    }
}