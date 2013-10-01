<?php

class Core extends CI_Controller
{
	public function index()
	{
		$this->template->build('core/index');
	}

	/**
	* 具体的讨论页面 多级阶梯式回复
	*
	* @author mot
	* @access public
	**/
	public function follow( $poid)
	{
		$this->template->build('core/follow');
	}
}