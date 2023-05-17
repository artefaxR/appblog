<?php

use Jenssegers\Blade\Blade;

class Login extends CI_Controller {

	public function index()
	{

        $login_salah = '';

        if ($this->session->has_userdata('username')) {
            redirect('backend/Dashboard/index');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            $user = \Orm\User::first();
            
            if ($username == $user->username && $password == $user->password) {
                $userdata = [
                    'username' => $user->username,
                ];
                $this->session->set_userdata($userdata);
                redirect('backend/Dashboard/index');
            } else {
                $login_salah = 'Maaf Salah Nama Atau Password. Coba Lagi';
            }
        }

		view('login', ['login_salah' => $login_salah]);
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }
}