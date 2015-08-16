<?php

class Setting_manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');

        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('setting');

    }

    public function view_subscriber()
    {
       // if ($this->session->userdata('logged_in')) {
            $data['data'] = $this->setting->get_subscribers();
            $data['subscriber'] = '1';

            $this->load->view('admin/header', $data);
            $this->load->view('admin/setting/subscribers');
            $this->load->view('admin/footer');
        /*} else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/
    }

    public function view_setting()
    {
        //if ($this->session->userdata('logged_in')) {
            $data['data'] = $this->setting->get_setting_list();

            $this->load->view('admin/header', $data);
            $this->load->view('admin/setting/view_setting');
            $this->load->view('admin/footer');
       /* } else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/
    }

    public function update_setting()
    {
        //if ($this->session->userdata('logged_in')) {

            if ($_FILES['userfile']['name'] == '') {
                $data = array(
                    'facebook' => $this->input->post('facebook'),
                    'twitter' => $this->input->post('twitter'),
                    'email'=>$this->input->post('email'),
                    'map'=> $this->input->post('map'),
                    'longitute'=> $this->input->post('longitute'),
                    'latitude'=> $this->input->post('latitude'),
                    'phone_no'=> $this->input->post('phone_no'),
                    'fax'=> $this->input->post('fax'),
                    'address'=> $this->input->post('address')

                );
                $this->setting->set_setting_data($data);
                $this->session->set_flashdata('message', 'Your setting is changed');
                redirect('admin/setting_manager/view_setting');

            } else {

                $this->load->helper('url');
                $config['file_name'] = time();
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $image['name'] = $this->input->post('same_logo');
                //unlink('images/' . $image['name']);

                if (!$this->upload->do_upload()) {
                    $error = array('error' => $this->upload->display_errors());
                    $error_msg = $error['error'];
                    $this->session->set_flashdata('message', $error_msg);
                    redirect('admin/setting_manager/view_setting');

                } else {
                    $image = $this->upload->data();
                    $data = array(
                        'logo' => $image['file_name'],
                        'facebook' => $this->input->post('facebook'),
                        'twitter' => $this->input->post('twitter'),
                        'contact_us' => $this->input->post('contact_us'),
                        'map'=> $this->input->post('map'),
                        'longitute'=> $this->input->post('longitute'),
                        'latitude'=> $this->input->post('latitude'),
                        'phone_no'=> $this->input->post('phone_no'),
                        'fax'=> $this->input->post('fax'),
                        'address'=> $this->input->post('address')


                    );
                }
                $this->setting->set_setting_data($data);
                $this->session->set_flashdata('message', 'Your setting is changed');
                redirect('admin/setting_manager/view_setting');
            }
        /*} else {

            $this->session->set_flashdata('message', 'You are not logged in.Please log in');
            redirect('admin/login_manager');
        }*/
    }
}