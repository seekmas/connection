<?php

class Core_models extends CI_Model
{

	private $follows = 'follows';

	public function post_comments( $uid)
	{
		if( $this->input->post('comment'))
		{
			$follow = array(
				'poid' 				=> intval( $this->input->post('poid')) , 
				'uid'  				=> $uid , 
				'follow_content' 	=> strip_tags( trim( $this->input->post('follow_content') )) , 
				'timecreated' 		=> time() , 
 			);

			$this->db->insert( $this->follows , $follow);

			form_post_refresh();
		}
	}

	/**
	*	
	* @author mot
	* @param $poid int
	* @access public
	* @return array
	**/
	public function get_comments_by_poid( $poid)
	{	
		return $this->db->where( array('poid'=>$poid))
						->order_by('id','desc')
						->get( $this->follows)
						->result_array();
	}
}