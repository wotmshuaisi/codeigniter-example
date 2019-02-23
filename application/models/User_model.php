<?php

    class User_model extends CI_Model {
        function get_users() {
            $this->load->database();
            $query = $this->db->query('SELECT * FROM user');

            return $query->result_array();
        }
    }

?>