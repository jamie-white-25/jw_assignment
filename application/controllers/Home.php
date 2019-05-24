<?php

class Home extends CI_Controller {
    public function index($page = 'home')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }   

    $data['title'] = "Jamie White assignment";
    $data['msg'] = "Jamie White assignment";
        
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
        
    }
}
