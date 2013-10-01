<?php

class Newsfeed_models extends CI_Model
{

	private $posts = 'posts';
	private $members = 'members';
	private $objects = 'objects';

	public function add_posts( $uid)
	{

		if( $this->input->post('post_status'))
		{

			$content = strip_tags( $this->input->post('news'));

			$content = mysql_real_escape_string( $content);

			$content = trim( $content);

			if( !$content)
				return false;

			$content = cutstr( $content , 864 , ' - ' );

			$post = array(
				'uid' => $uid ,
				'post_content' => $content , 
				'timecreated' => time() ,
				'object_id' => $this->input->post('object_id') ,
			);



			$this->db->insert( $this->posts , $post);

			if( $this->input->post('object_name'))
				redirect( site_url('pills/object/'.$this->input->post('object_name'))); 			
			else
				redirect( site_url('pills/index'));
		}
	}

	public function get_all_my( $page , $uid = 0 ) 
	{
		if( $uid == 0)
		{
			$where = array();
		}else
		{
			$where = array('uid' => $uid);
		}
		return $this->db->select( $this->posts.'.* , '.$this->members.'.username')
						->where( $where)
						->join( $this->members , $this->posts.'.uid='.$this->members.'.id' , 'left')
						->limit( 25 , 25 * ( $page - 1))
						->order_by('id' , 'desc')
						->get( $this->posts)->result_array();
	}

	public function get_newsfeeds_by_object( $object_id)
	{
		return $this->db->select( $this->posts.'.* , '.$this->members.'.username')
						->where( array('object_id'=>$object_id))
						->join( $this->members , $this->posts.'.uid='.$this->members.'.id' , 'left')
						->order_by('id' , 'desc')
						->get( $this->posts)
						->result_array();
	}

	public function get_object( $object)
	{
		$object = strip_tags( trim( $object));

		//$object = mysql_real_escape_string( $object);

		$object = urldecode( $object);

		return $this->db->where( array('object_name'=>$object))
				 		->get( $this->objects)
				 		->row_array();
	}
}