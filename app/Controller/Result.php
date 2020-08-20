<?php  

	namespace Edu\Board\Controller;

	use Edu\Board\Support\Database;

	use PDO;

	/**
	 * User Managements
	 */
	class Result extends Database
	{
		
		/**
		 * Add student result
		 */
		public function addResult($data)
		{
			$this -> create('results', [
				'student_id'		=> $data['student_id'],
				'ban'				=> $data['ban'],
				'eng'				=> $data['eng'],
				'math'				=> $data['math'],
				'ss'				=> $data['ss'],
				's'					=> $data['s'],
				'rel'				=> $data['rel'],
			]);
		}

		/**
		 * Search sudent result
		 */
		public function searchResult($exam, $year, $board, $roll, $reg)
		{
			$data = $this -> customQuery("SELECT * FROM students INNER JOIN results ON students.id=results.student_id  WHERE students.exam='$exam' AND students.year='$year' AND students.board='$board' AND students.roll='$roll' AND students.reg='$reg'");

			return $data -> fetch(PDO::FETCH_ASSOC);
		}

		/**
		 * Calculate Grade 
		 */
		public function getGradeGpa($marks)
		{
			if ( $marks >= 0 && $marks <= 32 ) {
				$grade = 'F';
				$gpa = 0;
			}elseif($marks >= 33 && $marks <= 39){
				$grade = 'D';
				$gpa = 1;
			}elseif($marks >= 40 && $marks <= 49){
				$grade = 'C';
				$gpa = 2;
			}elseif($marks >= 50 && $marks <= 59){
				$grade = 'B';
				$gpa = 3;
			}elseif($marks >= 60 && $marks <= 69){
				$grade = 'A-';
				$gpa = 3.5;
			}elseif($marks >= 70 && $marks <= 79){
				$grade = 'A';
				$gpa = 4;
			}elseif($marks >= 80 && $marks <= 100){
				$grade = 'A+';
				$gpa = 5;
			}else {
				$grade = 'invalid';
				$gpa = 'invalid';
			}

			return [
				'grade'	=> $grade,
				'gpa'	=> $gpa,
			];
		}


		

	}









?>