<?php

class Layout_property_module extends CI_Module{

	public function __construct()
	{
		
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

	}

	public function header()
	{
		
		$user = $this->status_models->get_status();

		$this->load->view('property/header' , array('user'=>$user));
	}

	public function footer()
	{
		$this->load->view('property/footer');
	}
}