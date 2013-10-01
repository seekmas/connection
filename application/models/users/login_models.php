<?php

class Login_models extends CI_Model
{

	private $status = 'members_status';

	/**
	* a model with signing up to the website
	*
	* @author mot
	* @access public
	**/
	public function get_registered()
	{
		if( $this->input->post('register'))
		{	
			$email = trim( strtolower( $this->input->post('email')));

			if( !preg_match( '/^\S+[@]\S+[.]\S+$/', $email ))
				return false;

			$users = array( 'username' => trim( strtolower( strip_tags( $this->input->post('username')))) , 
							'password' => trim( strtolower( strip_tags( $this->input->post('password')))) , 
							'email'	   =>  $email ,
							);

			$table = $this->input->post('t');

			if( $this->db->table_exists($table))
			{

			 	preg_match('/^\w{6}/', md5( microtime()) , $str) ;

				$users['salt'] = $str[0];

				$users['password'] = md5( md5( $users['password']) . $users['salt'] );
					
				$users['timecreated'] = time(); 

				$users['lastlogin']	= time();

				if( $this->db->where( array('username'=>$users['username'] ))->or_where( array('email'=>$users['email']))->get( $table)->num_rows() )
				{
					echo '<div class="container"><div class="alert alert-info">用户名已经存在</div></div>';
				}
				else
				{
					$this->db->insert( $table , $users);

					echo '<div class="container"><div class="alert alert-success">注册成功</div></div>';
				}
			}
		}
	}

	/**
	* a model sign in
	*
	* @author mot 
	* @access public
	**/
	public function get_signedin()
	{
		if( $this->input->post('login'))
		{

			$table = $this->input->post('t');

			$users = array(
				'username' => strtolower( trim( $this->input->post('username')) ),
				'password' => $this->input->post('password') ,
			);

			if( !$this->db->table_exists( $table))
				return false;

			$auth_user = $this->db->where( array('username'=>$users['username']))
								  ->get($table)
								  ->row_array();

			$is_remembered = ($_POST['remember_password'] === 'on') ? true : false;

			if( !$auth_user)
				return false;

			if( $auth_user['password'] === md5( md5( $users['password']) . $auth_user['salt']) )
			{
				$this->save_login_data( $auth_user , $is_remembered , $table);
			}

		}
	}

	private function save_login_data( $users , $is_remembered , $table)
	{

		$this->db->where( array('id'=>$users['id']))->update( $table , array('lastlogin'=>time()));

		if( $is_remembered)
			$cleanup = 86400;
		else
			$cleanup =  14400;

		$authstr = md5( $users['username'] . microtime());

		$this->session->set_userdata( 'user' , array( 'userid' => $users['id'] , 'authstr' => $authstr ));

		$this->db->insert( $this->status , array('authstr' => $authstr , 'userid' => $users['id'] , 'timecreated' => time() , 'timeexpired' => time() + $cleanup) );

		redirect( site_url('pills/index'));

		exit;
	}
}