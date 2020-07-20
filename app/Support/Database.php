<?php  
	
	namespace Edu\Board\Support;
	
	use PDO;

	/**
	 * Database  Managements
	 */
	abstract class Database
	{
		
		/**
		 * Server Information 
		 */
		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db =  DB ;
		private $connection;

		/**
		 * Database connection 		 
		 */
		private function connection()
		{			

			return $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=". $this -> db , $this -> user , $this -> pass);
				
		}	


		/**
		 * Data Check 
		 */
		public function dataCheck($tbl, $data)
		{
		 	$stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE email='$data' || uname='$data'");
		 	$stmt -> execute();

		 	$num = $stmt -> rowCount();

		 	return [
		 		'num'	=> $num,
		 		'data'	=> $stmt
		 	];		 	




		}

			


	}






