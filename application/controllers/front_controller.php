<?php

class Front_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('front_model');
        $this->load->model('network');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('string');

        $this->load->library('pagination');
    }

    public function index()
    {
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        $data['featured_news'] = $this->front_model->get_featured_news();
        $data['banner_images'] = $this->front_model->get_banner_images();
        foreach ($data['featured_news'] as $news) {
            $data['content_images'][] = $this->front_model->get_images($news['id']);
        }
        $data['product'] = $this->front_model->get_all_product();
        $data['categories'] = $this->front_model->get_all_categories();

        $this->load->view('templates\header', $data);
        $this->load->view('frontpage');
        $this->load->view('templates\footer');

    }

    public function network()
    {
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        $data['featured_news'] = $this->front_model->get_featured_news();
        $data['banner_images'] = $this->front_model->get_banner_images();
        foreach ($data['featured_news'] as $news) {
            $data['content_images'][] = $this->front_model->get_images($news['id']);
        }
        $data['product'] = $this->front_model->get_all_product();
        $data['categories'] = $this->front_model->get_all_categories();
        $data['address_location'] = $this->network->get_branches_list();
       //print_r($data['address_location']);die;

        $this->load->view('templates\header', $data);
        $this->load->view('network_page');
        $this->load->view('templates\footer');

    }

    public function product_services()
    {
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        $data['banner_images'] = $this->front_model->get_banner_images();

        $data['categories'] = $this->front_model->get_all_categories();

        $this->load->view('templates\header', $data);
        $this->load->view('e_browser');
        $this->load->view('templates\footer');
    }

    public function show_all_news()
    {
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();

        $this->load->view('templates\header', $data);
        $this->load->view('show_all_news');
        $this->load->view('templates\footer');
    }

    public function subscribe()
    {
        $subscribe = $this->input->post('subscribers');
        $sub = $subscribe;
        $data = array('subscribers' => $subscribe);
        $result = $this->front_model->subscribe($data, $sub);
        if ($result == "error") {
            echo "error";
        } else {
            echo "Success";
        }
    }

    public function view_news_details()
    {
        $slug = $this->uri->segment(3);
        $data['details'] = $this->front_model->get_news($slug);
        $id = $data['details']['id'];
        $data['images'] = $this->front_model->get_news_images($id);
        $data['setting'] = $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        $data['featured_news'] = $this->front_model->get_featured_news();
        $data['banner_images'] = $this->front_model->get_banner_images();
        foreach ($data['featured_news'] as $news) {
            $data['content_images'][] = $this->front_model->get_images($news['id']);
        }

        $this->load->view('templates\header', $data);
        $this->load->view('details_page');
        $this->load->view('templates\footer');
    }

    public function about_us()
    {
        $slug = $this->uri->segment(3);
        $data['details'] = $this->front_model->get_news($slug);
        $id = $data['details']['id'];
        $data['images'] = $this->front_model->get_news_images($id);
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        $data['featured_news'] = $this->front_model->get_featured_news();
        $data['banner_images'] = $this->front_model->get_banner_images();
        foreach ($data['featured_news'] as $news) {
            $data['content_images'][] = $this->front_model->get_images($news['id']);
        }

        $this->load->view('templates\header', $data);
        $this->load->view('about_us');
        $this->load->view('templates\footer');
    }

    public function contact()
    {
        $data['setting'] = $this->front_model->get_setting();
        $data['content_news'] = $this->front_model->get_all_news();
        /*$data['footer_news'] = $this->front_model->get_footer_news();*/
        $data['address_location'] = $this->network->get_branches_list();
        $this->load->view('templates\header', $data);
        $this->load->view('contact_page');
        $this->load->view('templates\footer');


    }

    public function send_email()
    {
        $this->load->helper('email');
        $this->load->library('email');
        $data['user'] = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
        );

        if (!valid_email($data['user']['email'])) {
            $this->session->set_flashdata('message', 'Invalid Email...');
            redirect('front_controller/contact');
        } else {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com.',
                'smtp_port' => 465,
                'smtp_user' => 'satish.localmail@gmail.com', // change it to yours
                'smtp_pass' => 'neversaydie', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $data['setting'] = $this->front_model->get_setting();

            $admin_msg = $this->load->view('admin_msg', $_POST, TRUE);
            $msg = $this->load->view('user_msg', $_POST, TRUE);

            $this->load->library('email', $config);
            $this->email->from($data['user']['email'], "User");
            $this->email->to($data['setting']['contact_us']);
            $this->email->subject("user feedback");
            $this->email->message($admin_msg);

            if ($this->email->send()) {
                $this->email->from($data['setting']['contact_us'], "Admin Team");
                $this->email->to($data['user']['email']);
                $this->email->subject("News");
                $this->email->message($msg);
                if ($this->email->send()) {
                    $this->session->set_flashdata('message', 'Email sent.....');
                    redirect('front_controller/contact');
                } else {
                    $this->session->set_flashdata('message', 'Sorry Unable to send email...');
                    redirect('front_controller/contact');
                }
            } else {
                $this->session->set_flashdata('message', 'Sorry Unable to send email...');
                redirect('front_controller/contact');
            }
        }


    }
}