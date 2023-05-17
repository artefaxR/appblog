<?php

class MY_Controller extends CI_Controller
{
    public function __constructor() {
        parent::__constructor();
        
        if (!($this->session->has_userdata('username'))) {
            redirect('Login');
        }
    }
}