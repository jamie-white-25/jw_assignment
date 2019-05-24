<?php

    class Tasks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('tasks_model');

        }

        public function unix_date()
        {

            $date = htmlspecialchars($this->input->post('timestamp'));
                    
            if(empty($date))
            {   
                $mes = ['error' => 'you need to enter a unix date'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $date = json_decode($date);

            if(!is_numeric($date))
            {
                $mes = ['error' => 'you need to enter a unix date'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $orignal_date = $date;
            $json_date = date("d-M-Y", $date);
            $date_array = ['date' => $json_date, 'orginal_date' => $orignal_date];

            $save = $this->tasks_model->save_unix_date($orignal_date, $json_date);

            if(!$save)
            {
                $mes = ['error' => 'did not save to the davabase'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $json_date = json_encode($date_array);
            echo $json_date;
        }

        public function unix_offset()
        {
            $offset = htmlspecialchars($this->input->post('offset'));
            $date = htmlspecialchars($this->input->post('timestamp'));

            if(empty($date) || empty($offset))
            {   
                $mes = ['error' => 'you need to enter a unix date'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $date = json_decode($date);
            $offset = json_decode($offset);
            $orginal_date = $date;

            if(!is_numeric($date) || !is_numeric($offset)) 
            {
                $mes = ['error' => 'you need to enter a unix number'];
                $msg = json_encode($mes);
                echo $msg;
            }


            $new_date = $date.$offset;               
            $date = gmdate("d-M-Y", $new_date);   

            $save = $this->tasks_model->save_offset_date($orginal_date, $new_date, $date);

            if(!$save)
            {
                $mes = ['error' => 'did not save to the davabase'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $date_array = ['date' => $date, 'orginal_date' => $new_date];
            $json_date = json_encode($date_array);
            echo $json_date;
        }

        public function email_check()
        {
            $email = htmlspecialchars($this->input->post('email'));

            $orginal_email = $email;
            
            // Remove all illegal characters from email
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
            {   
                $save = $this->tasks_model->save_email($email);

                if(!$save)
                {
                    $mes = ['error' => 'did not save to the davabase'];
                    $msg = json_encode($mes);
                    echo $msg;
                }

                $email_array = ['vaild' => "this email is a valid email address", 'email' => $orginal_email];
                $check = json_encode($email_array);
                echo $check;
            } else {
                $email_array = ['error' => "this email is not a valid email address", 'email' => $orginal_email];
                $check = json_encode($email_array);
                echo $check;
            }
        }

        public function coin_flip()
        {
            $coin = htmlspecialchars($this->input->post('number'));

            $heads = 0;
            $tails = 0;

            for ($i=0; $i < $coin; $i++) 
            { 
                $ram = rand(1,2);
                if($ram === 1)
                {
                    $heads++;
                }
                else
                {
                    $tails++;
                }
            }

            function count_percentage($coin_side,$coin_cout)
            {
                $x = $coin_side;
                $y = $coin_cout;
    
                $percent = $x/$y;
                return $percent_friendly = number_format( $percent * 100, 2 ) . '%';
            }

            $heads_percent = count_percentage($heads,$coin);
            $tails_percent = count_percentage($tails,$coin);

            $save = $this->tasks_model->save_coin_flip($coin, $heads, $tails,$heads_percent, $tails_percent);

            if(!$save)
            {
                $mes = ['error' => 'did not save to the davabase'];
                $msg = json_encode($mes);
                echo $msg;
            }

            $arr = json_encode(['heads' => $heads, 'tails' => $tails, 'headsPercent' => $heads_percent, 'tailsPercent' => $tails_percent]);

            echo $arr;

        }
    }