<?php

class Layout_property_module extends CI_Module{

	public function __construct()
	{
		
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

	}

	public function header()
	{
		if( $this->session->userdata('user'))
			
			$user = $this->status_models->get_status();

		else
			$user = array('username' => 'Anonymous');

		$this->load->view('property/header' , array('user'=>$user));
	}

	public function footer()
	{
		$this->load->view('property/footer');
	}
}