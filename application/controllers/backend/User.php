<?php

use Jenssegers\Blade\Blade;

class User extends MY_Controller {

	public function profile()
	{
        $user = \Orm\User::first();

        $notif = null;
        
        if($this->input->post()) {
            if ($user->username == $_POST['username'] && $user->password == $_POST['password']) {
                $notif = 'Anda memasukkan username dan password yang sama';
            } else {
                $user->username = $_POST['username'];
                $user->password = $_POST['password'];
                $user->save();

                $notif = 'Username/Password berhasil diubah';
            }
        }
        
		view('backend/User/profile', ['user' => $user, 'notif' => $notif]);
	}
	
}