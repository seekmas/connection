<?php

class Connection_models extends CI_Model
{

	private $table = 'members';
	private $objects = 'objects';

	public function follow_people()
	{
		if( $this->input->post('followByName'))
		{
			$key = strip_tags( trim( $this->input->post('keyword')));

			if( preg_match('/^\S+[@\.]\S+\.\S+$/', $key))
			{
				return $this->db->where( array('email' => $key))
						 	    ->get( $this->table)
						 		->result_array();
			}
			else if( preg_match('/^\w+$/', $key))
			{
				return $this->db->like( array('username'=>$key))
						 	    ->get( $this->table)
						 		->result_array();
			}else
			{
				return 'invaild_keywords_error';
			}
		}
	}

	public function post_object( $user_id)
	{

		if( $this->input->post('post_object'))
		{
			$object_name = strip_tags( trim( $this->input->post('object_name')));

			if( $this->db->where( array('object_name'=>$object_name))
					 ->from( $this->objects)
					 ->get()
					 ->num_rows())
			{
				return false;
			}
			else
			{
				return $this->db->insert( $this->objects , array('object_name'=>$object_name , 'timecreated' => time() , 'user_id' => $user_id, 'times' => 1));
			}
		}
		
	}

	public function get_objects()
	{
		return $this->db->get( $this->objects)
						->result_array();
	}
}