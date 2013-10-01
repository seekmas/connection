<?php

class Layout_property_module extends CI_Module{

	public function header()
	{
		$this->load->view('property/header');
	}

	public function footer()
	{
		$this->load->view('property/footer');
	}
}