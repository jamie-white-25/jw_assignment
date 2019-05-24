<?php
class Tasks_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function save_unix_date($timestamp = FALSE, $formatted_date = FALSE)
        {

                if(!$timestamp || !$formatted_date)
                {
                        return FALSE;
                }

                $data = [
                        'raw_time' => $timestamp,
                        'date'     => $formatted_date
                ]; 
                
                return $this->db->insert('unix_date', $data);
        }

        public function save_offset_date($orginal_date,$timestamp, $formatted_date)
        {
                $data = [
                        'orginal_raw_date'      => $orginal_date,
                        'offset_raw_date'       => $timestamp,
                        'date'                  => $formatted_date
                ]; 
                
                return $this->db->insert('offset_date', $data);
        }

        public function save_email($email = FALSE)
        {
                if(!$email)
                {
                        return FALSE;
                }

                $data = ['email' => $email];

                return $this->db->insert('email_check', $data);
        }

        public function save_coin_flip($coin_filp = FALSE, $number_heads = FALSE, $number_tails = FALSE, $percent_heads = FALSE, $percent_tails = FALSE)
        {
                if(!$coin_filp || !$number_heads || !$number_tails || !$percent_heads || !$percent_tails)
                {
                        return FALSE;
                }  

                $data = [
                        'number_coin_filps' => $coin_filp,
                        'number_heads'      => $number_heads,
                        'number_tails'      => $number_tails,
                        'percent_heads'     => $percent_heads,
                        'percent_tails'     => $percent_tails,
                ];

                return $this->db->insert('coin_flip', $data);
        }

}