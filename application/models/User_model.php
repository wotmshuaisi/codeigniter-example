<?php

    class User_model extends CI_Model {
        function select_users() {
            $query = $this->db->query('SELECT * FROM user');

            return $query->result_array();
        }

        function get_user() {
            // $query = $this->db->query('SELECT * FROM user WHERE id=1');
            // $query = $this->db->where('id', 1)->get('user', 1);
            $query = $this->db->get_where('user', array('id'=>1),1);
            
            return $query->row();
        }

        function create_user($data) {
            $q = $this->db->insert('user', $data);
            return $q;
        }

    }

?>