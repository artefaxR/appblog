<?php

use Jenssegers\Blade\Blade;

class Dashboard extends MY_Controller {

	public function index()
	{
		// $this->load->view('template');
		view('backend/Dashboard/index');
	}

	public function table()
	{
		view('backend/Dashboard/table');
	}
		
	public function test()
	{
		// $views = VIEWPATH;
		// $cache = APPPATH.'cache';
		// $blade = new Blade($views, $cache);

		// echo $blade->make('test', ['name' => 'alwan'])->render();

		view('test', ['name' => 'alwan']);
	}
}