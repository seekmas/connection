<?php

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->template->set_layout('user');

		$this->load->model('users/login_models' , 'login_models');

		$this->load->model('connection/connection_models');

		$this->load->model('users/status_models' , 'status_models');
	}

	public function index()
	{

		$this->login_models->get_registered();

		$table = 'members';

		$fields = $this->db->list_fields( $table);

		$this->template->build('users/index' , array( 'fields' 	=> $fields ,
													  'table'	=> $table ,
													)
		);
	}

	public function login()
	{

		$this->login_models->get_signedin();

		$table = 'members';

		$this->template->build('users/login' , array( 'table' => $table));
		
	}

	public function profile()
	{

		$objects = $this->connection_models->get_objects();

		$this->template->set_layout('default')->build('users/profile' , array( 'objects' => $objects)
		);
	}

	public function configure()
	{

		$this->template->set_layout('default')->build('users/configure');
	}

	public function tiktok()
	{

		$user = $this->status_models->get_status();

		$this->template->build('users/tiktok' , array('user'=>$user));
	}
}