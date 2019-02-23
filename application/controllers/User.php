<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller
    {
        function index() {
            // load part
            $this->load->model('user_model', 'um');

            // logic part

            $data['userArray'] = $this->um->select_users();
            $data['user'] = $this->um->get_user();
            // print_r($this->um->get_user());


            // view
            $this->load->view('user/user_view', $data);
        }

        function submit() {
            $this->load->model('user_model', 'um');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('company', 'Company', 'required', 
                array('required' => 'company required.')
            );
            
            $v = $this->form_validation->run();
            if ($v == FALSE) {
                $this->load->view('user/user_form');
                return;
            }
            
            $inputdata = $this->input->post();
            $this->um->create_user($inputdata);
            redirect('/user/', 'refresh');
        }

    }
?>