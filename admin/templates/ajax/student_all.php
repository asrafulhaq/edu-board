<?php  

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	
	use Edu\Board\Controller\Student;

	$stu = new Student;

	$data = $stu -> allStudents();

	$i = 1;
	foreach( $data as $stu ) :

?>
	

	<tr>
	    <td><?php echo $i; $i++; ?></td>
	    <td><?php echo $stu['name']; ?></td>
	    <td><?php echo $stu['roll']; ?></td>
	    <td><?php echo $stu['reg']; ?></td>
	    <td><?php echo $stu['board']; ?></td>
	    <td><?php echo $stu['year']; ?></td>
	    <td><img style="width: 50px;height:50px;" src="students/<?php echo $stu['photo']; ?>" alt=""></td>
	    <td>
	        <a class="btn btn-sm btn-info" href="#">View</a>
	        <a class="btn btn-sm btn-warning" href="#">Edit</a>
	        <a class="btn btn-sm btn-danger" href="#">Delete</a>
	    </td>
	</tr>

<?php endforeach; ?>