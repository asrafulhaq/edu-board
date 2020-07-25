<?php  

	namespace Edu\Board\Controller;

	use Edu\Board\Support\Database;

	/**
	 * User Managements
	 */
	class User extends Database
	{
		
		/**
		 * User Add 
		 */
		public function createUser($data)
		{
			
			$data = $this -> create('users', [
				'name'		=> $data['name'],
				'uname'		=> $data['uname'],
				'pass'		=> password_hash( 'login' , PASSWORD_DEFAULT),
				'email'		=> $data['email'],
				'cell'		=> $data['cell'],
				'role'		=> $data['role'],
			]);

			if ( $data ) {
				return "<p class=\"alert alert-success\">User created successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
			

		}


		public function passwordChange($user_id, $new_pass)
		{
			
			$this -> update('users', $user_id, [
				'pass'		=> password_hash(  $new_pass , PASSWORD_DEFAULT),
			]);

			return "<p class=\"alert alert-success\">Pasword change successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}


		public function allUser()
		{
			$data = $this -> all('users');

			return $data;
		}



	}









?>