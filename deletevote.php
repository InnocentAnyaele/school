<?php 
include ('db.php');


if (isset($_POST['deletevote'])){

	$number = $_POST['viewpollid'];
	$student = $_POST['studentid'];
	$name = $_POST['name'];	
}

	

$delete = mysqli_query($conn,("DELETE FROM `vote` WHERE `log`='$number' AND `student_id`='$student' AND `name`='$name'"));

	if($delete){
  echo "<script>alert('Vote Deleted!'); location.href='srcpoll.php';</script>";
	}
	else{
		  echo "<script>alert('Failed!'); location.href='srcpoll.php';</script>";
	}

	

?>