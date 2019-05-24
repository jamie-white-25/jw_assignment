<?php
class Data_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_unix_date()
        {
            $query = $this->db->get('unix_date');
            return $query->result_array();       
        }

        public function get_offset_date()
        {
            $query = $this->db->get('offset_date');
            return $query->result_array();       
        }

        public function get_emails()
        {
            $query = $this->db->get('email_check');
            return $query->result_array();       
        }

        public function get_coin_flips()
        {
            $query = $this->db->get('coin_flip');
            return $query->result_array();       
        }
}