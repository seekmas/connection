<?php

class Page_topcommon_module extends CI_Module
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

		$this->load->model('connection/connection_models');
	}

	public function down_list( $object = NULL)
	{
		$user = $this->status_models->get_status();

		$objects = $this->connection_models->get_objects();

		$this->load->view('topcommon/down_list' , array('user'=>$user , 'objects'=>$objects , 'object' => $object));
	}
}