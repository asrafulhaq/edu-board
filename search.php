<?php  
	
	require_once "config.php";
	require_once "vendor/autoload.php";

	use Edu\Board\Controller\Result;

	$res =  new Result;



	/**
	 * Search form isset
	 */
	if ( isset($_POST['result']) ) {

		// Get values
		$exam = $_POST['exam'];
		$year = $_POST['year'];
		$board = $_POST['board'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];


		$result_data = $res -> searchResult($exam, $year, $board, $roll, $reg);



	}else {
		header("location:index.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="admin/students/<?php echo $result_data['photo']; ?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $result_data['name']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $result_data['roll']; ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $result_data['reg']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $result_data['board']; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $result_data['inst']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><span style="color:green;font-weight:bold;">Passed<span></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td><?php echo $result_data['ban']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['ban']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['ban']); echo $data['gpa'] ?></td>
							<td rowspan="6">4.8</td>
						</tr>
						<tr>
							<td>English</td>
							<td><?php echo $result_data['eng']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['eng']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['eng']); echo $data['gpa'] ?></td>
						</tr>
						<tr>
							<td>Math</td>
							<td><?php echo $result_data['math']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['math']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['math']); echo $data['gpa'] ?></td>
						</tr>
						<tr>
							<td>Social Science</td>
							<td><?php echo $result_data['ss']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['ss']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['ss']); echo $data['gpa'] ?></td>
						</tr>
						<tr>
							<td>Science</td>
							<td><?php echo $result_data['s']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['s']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['s']); echo $data['gpa'] ?></td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><?php echo $result_data['rel']; ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['rel']); echo $data['grade'] ?></td>
							<td><?php $data = $res -> getGradeGpa($result_data['rel']); echo $data['gpa'] ?></td>
						</tr>
					</table>
				</div>




		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	

	
</body>
</html>