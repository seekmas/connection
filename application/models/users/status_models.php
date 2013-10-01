<?php

class Status_models extends CI_Model
{

	private $status = 'members_status';
	private $members = 'members';

	public function get_status()
	{
		$user = $this->session->userdata('user');

		if( !$user)
			redirect( site_url('users/login'));

		$this->db->cache_on();

		$user = $this->db->where( array('authstr' => $user['authstr']))
				 		 ->order_by( 'id' , 'desc')
				 	     ->get( $this->status)
				 		 ->row_array();
		$u = $this->db->where( array('id'=>$user['userid']))
					  ->get( $this->members)
					  ->row_array();

		if( $user && $user['timeexpired'] > time())

			return $u;

		else

			return false;
	}
}