<?php  

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	
	use Edu\Board\Controller\Student;

	$stu = new Student;


	$data = $stu -> studentSerach($_POST['stu_val']);
	
	echo "<ul class=\"shadow\">";
	foreach($data as $student) :

?>

<li id="student_select" student_id="<?php echo $student['id']; ?>" student_name="<?php echo $student['name']; ?>" student_roll="<?php echo $student['roll']; ?>" student_reg="<?php echo $student['reg']; ?>" student_pic="<?php echo $student['photo']; ?>"  style="list-style:none; cursor:pointer;"><img style="width: 50px;height: 50px; border-radius: 50%; " src="students/<?php echo $student['photo']; ?>" alt=""> <span><?php echo $student['name']; ?></span><span> - Roll : <?php echo $student['roll']; ?></span><span> Reg :  <?php echo $student['reg']; ?></span></li>



<?php endforeach; ?>
</ul>