<?php

class Userset extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('userset/member_profile' , 'member_profile');

		$this->template->set_layout('userset');
	}

	public function avatar()
	{
		$this->template->build('userset/avatar');
	}

	public function attitude()
	{
		$this->template->build('userset/attitude');
	}

	public function personaldescription()
	{

		$columns = $this->member_profile->get_columns();

		$this->template->build('userset/personaldescription' , array('columns'=>$columns));
	}

	public function groups()
	{
		$this->template->build('userset/groups');
	}

	public function belief()
	{
		$this->template->build('userset/belief');
	}

	public function habit()
	{
		$this->template->build('userset/habit');
	}
	
}