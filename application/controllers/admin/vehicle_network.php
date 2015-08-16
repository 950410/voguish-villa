<?php

class Vehicle_network extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('network');
    }

    public function branch_table()
    {
        $data['branches_list'] = $this->network->get_branches_list();
        $data['address_list'] = $this->network->get_network_address();
        $data['network_list'] = $this->network->get_network_list();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/networks/view_location');
        $this->load->view('admin/footer');
    }

    public function add_branches()
    {
        $id = $this->uri->segment(4);
        $data['networks'] = $this->network->get_network_list();
        if ($id == '') {
            $data['branches'] = array(
                'id' => '',
                'location' => '',
                'longitude' =>'',
                'latitude' =>''
            );

            $topic = array('topic' => 'create form ');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/networks/branches_form', $data);
            $this->load->view('admin/footer');
        } else {
            $data['branches'] = $this->network->branches_item($id);
            $data['address'] = $this->network->address_item($id);

            $topic = array('topic' => 'update');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/networks/branches_form', $data);
            $this->load->view('admin/footer');

        }

    }

    public function update_branches_form()
    {
        $ids = array('id' => $this->input->post('id'));
        $id = $ids['id'];
        $data_location = array(
            'location' => $this->input->post('location'),
            'longitude' => $this->input->post('longitude'),
            'latitude' => $this->input->post('latitude')
        );

        if ($id == "") {
            $this->session->set_flashdata('message', 'ADDED');
            $id = $this->network->add_branches_location($data_location);
            $data['networks'] = $this->input->post('network');
            $data['addresses'] = $this->input->post('address');
            $i = 0;
            foreach ($data['networks'] as $network) {
                $networks[] = array(
                    'id' => $network,
                    'address' => $data['addresses'][$i++]
                );

            }
            foreach ($networks as $network) {
                $data_address = array(
                    'network_id' => $network['id'],
                    'location_id' => $id['id'],
                    'address' => $network['address']
                );
                $this->network->add_network_address($data_address);
            }

            redirect('admin/vehicle_network/branch_table');
        } else {

            $this->session->set_flashdata('message', 'UPDATED');
            $this->network->update_branches_location($data_location,$id);
            $data['networks'] = $this->input->post('network');
            $data['addresses'] = $this->input->post('address');
            $i = 0;
            foreach ($data['networks'] as $network) {
                $networks[] = array(
                    'id' => $network,
                    'address' => $data['addresses'][$i++]
                );

            }
            foreach ($networks as $network) {
                $data_address = array(
                    'network_id' => $network['id'],
                    'location_id' => $id,
                    'address' => $network['address']
                );

                $this->network->update_network_address($data_address,$id,$network['id']);
            }

            redirect('admin/vehicle_network/branch_table');
        }
    }

    public function remove_location_network()
    {
        $id = $this->uri->segment(4);
        $result=$this->network->remove_network($id);
        if ($result){
            echo "Success";
        }
        else{
            echo "Error";
        }

    }

    public function network_table()
    {
        $data['network_list'] = $this->network->get_network_list();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/networks/view_network');
        $this->load->view('admin/footer');

    }

    public function add_network()
    {
        $id = $this->uri->segment(4);
        if ($id == '') {
            $data['network'] = array(
                'id' => '',
                'network' => '',
            );
            $topic = array('topic' => 'create form ');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/networks/network_form', $data);
            $this->load->view('admin/footer');
        } else {
            $data['networks'] = $this->network->get_network_list();
            $data['network_address'] = $this->network->network_item($id);

            $topic = array('topic' => 'update');
            $this->load->view('admin/header', $topic);
            $this->load->view('admin/networks/network_form', $data);
            $this->load->view('admin/footer');

        }

    }

    public function update_form()
    {
        $ids = array('id' => $this->input->post('id'));
        $id = $ids['id'];
        $data = array(
            'network' => $this->input->post('network')
        );

        if ($id == "") {
            $this->session->set_flashdata('message', 'ADDED');
            $this->network->add_network($data);

            redirect('admin/vehicle_network/network_table');
        } else {
            $this->session->set_flashdata('message', 'UPDATED');
            $this->network->update_network($data, $id);

            redirect('admin/vehicle_network/network_table');
        }
    }

    public function delete_network()
    {
        $id = $this->uri->segment(4);
        $this->session->set_flashdata('message', 'DELETED');
        $this->network->del_network($id);
        redirect('admin/vehicle_network/network_table');
    }

}