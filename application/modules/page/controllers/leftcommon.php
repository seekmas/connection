<?php

class Page_leftcommon_module extends CI_Module
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

	}

	public function default_page()
	{
		
		$user = $this->status_models->get_status();

		$this->load->view('leftcommon/default' , array('user'=>$user));
		
	}
}