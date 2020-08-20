<?php  


	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	
	use Edu\Board\Controller\Result;

	$res = new Result;

	$res -> addResult($_POST);

?>