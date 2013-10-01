<?php

class Member_profile extends CI_Model
{

	private $members_profile = 'members_profile';
	
	public function get_columns()
	{
		return $this->db->list_fields( $this->members_profile);
	}
}