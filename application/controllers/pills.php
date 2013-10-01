<?php

	/**
	 * 围脖与贴吧的合体版
	 *
	 * 针对个人兴趣定制的讨论社区
	 * 		更方便的组织起来相同兴趣的朋友
	 *	- and -
	 * 		通过某一个核心主题来获取信息
	 *	- and -
	 *      社区性质 up起来一个zpo来保证其真实性
	 * 	- more -
	 *      Just For Fun
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://mot99.com
	 */

class Pills extends CI_Controller
{

	public function __construct()
	{
		
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

		$this->load->model('pills/newsfeed_models' , 'newsfeed_models');

		
	}

	public function index( $page = 1)
	{

		$user = $this->status_models->get_status();

		$this->newsfeed_models->add_posts( $user['id']);

		$post_list = $this->newsfeed_models->get_all_my( $page);

		$this->template->build('pills/index' , array('post_list'=>$post_list ));
	}

	public function object( $object )
	{

		$user = $this->status_models->get_status();
		
		$this->newsfeed_models->add_posts( $user['id']);

		$current_object = $this->newsfeed_models->get_object( $object);

		$post_list = $this->newsfeed_models->get_newsfeeds_by_object( $current_object['id']);

		$this->template->build('pills/object' , array( 'current_object' => $current_object , 
													   'post_list'		=>	$post_list ,
													 )
		);
	}

	public function focus()
	{
		$this->template->build('pills/focus');
	}

	public function publicmedia()
	{
		$this->template->build('pills/publicmedia');
	}

}