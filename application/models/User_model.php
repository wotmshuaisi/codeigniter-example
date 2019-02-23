<?php

    class User_model extends CI_Model {
        function select_users() {
            $this->load->database();
            $query = $this->db->query('SELECT * FROM user');

            return $query->result_array();
        }

        function get_user() {
            $this->load->database();
            $query = $this->db->query('SELECT * FROM user WHERE id=1');
            
            return $query->result();
        }

    }

?>