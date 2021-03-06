<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Main extends CI_Controller
    {
        public function index()
        {
            $this->load->helper('tag_helper');
            
            // echo '<pre>';
            pre_start();
            var_dump($this->input->request_headers());
            pre_end();
            // echo '</pre>';
            return;
        }

        public function hello()
        {
            echo '<h1>';
            echo 'Hello!';
            echo '</h1>';
            return;
        }

        public function name()
        {
            $this->load->model('name');
            $firstname = $this->name->firstname();
            $lastname = $this->name->lastname();
            echo "<h1>Hello " . $firstname . ' ' . $lastname . "</h1>";
            return;
        }

        public function test()
        {
            $this->load->model('authentication', 'auth');
            $name = $this->auth->userData();
            echo $name;
        }

    }
    
?>