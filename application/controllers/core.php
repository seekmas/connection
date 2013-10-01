<?php

class Core extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('users/status_models' , 'status_models');

		$this->load->model('pills/newsfeed_models' , 'newsfeed_models');

		$this->load->model('core/core_models' , 'core_models');
	}

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
		$user = $this->status_models->get_status();

		$this->core_models->post_comments( $user['id']);

		$po = $this->newsfeed_models->get_po_by_id( $poid);

		$comment_list = $this->core_models->get_comments_by_poid( $poid);

		$this->template->build('core/follow' , array('po'=>$po , 'comment_list'=>$comment_list));
	}

	/**
	*
	* @author mot
	* @access public
	* @return void
	**/
	public function remove( $id)
	{
		$post = $this->db->select('id,uid')
				 		 ->from( 'posts')
				 		 ->where( array('id'=>$id))
				 		 ->get()
				 		 ->row_array();
		if( !$post){

			$this->template->build('core/post_not_found');

			return ;
		}

		$user = $this->status_models->get_status();

		if( $post['uid'] === $user['id'])
		{
			$this->db->delete('posts' , array('id'=>$id,'uid'=>$user['id']));

			redirect('core/work_done');
		}
	}

	public function work_done()
	{
		$this->template->build('core/work_done');
	}
}