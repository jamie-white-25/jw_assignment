<?php

    class Data extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('data_model');

        }

        public function get_unix_time()
        {
            $dates = $this->data_model->get_unix_date();
            $dates = json_encode($dates);
            echo $dates;
            
        }
        
        public function get_offset_time()
        {
            $dates = $this->data_model->get_offset_date();
            $dates = json_encode($dates);
            echo $dates;
            
        }

        public function get_emails()
        {
            $emails = $this->data_model->get_emails();
            $emails = json_encode($emails);
            echo $emails;
            
        }

        public function get_coin_flips()
        {
            $coin = $this->data_model->get_coin_flips();
            $coin = json_encode($coin);
            echo $coin;
            
        }
}