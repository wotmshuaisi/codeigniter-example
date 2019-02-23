<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller
    {
        function index() {
            
            $this->load->model('user_model', 'um');
            $data['userArray'] = $this->um->get_users();
            $this->load->view('user/user_view', $data);
        }
    }
?>