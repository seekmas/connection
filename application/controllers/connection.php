<?php

class Connection extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('connection/connection_models');

		$this->load->model('users/status_models' , 'status_models');
	}
	
	/**
	* core function 
	* share a topic or subject
	*
	* @author mot 2013
	* @access public
	**/
	public function share()
	{	
		$user = $this->status_models->get_status();

		$this->connection_models->post_object( $user['id']);
		
		$this->template->build('connection/share');
	}

	public function follow()
	{

		$connection = $this->connection_models->follow_people();

		$this->template->build('connection/follow' , array( 'connection'=>$connection));
	}

	public function find()
	{
		$this->template->build('connection/find');
	}


}