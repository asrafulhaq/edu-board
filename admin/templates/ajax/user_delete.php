<?php  

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\Board\Controller\User;

	$user = new User;

	$id = $_POST['id'];

	$data = $user -> userDelete($id);

	if ( $data ) {
		echo "<p class=\"alert alert-success\">User delete successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	}






