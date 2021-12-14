<?php
include ('db.php');

if (isset($_POST['add'])){
	$name = $_POST['name'];
	$id = $_POST['addoptionid'];

	$insert = mysqli_query($conn,("INSERT INTO `poll_name`(`log`,`name`) VALUES('$id','$name') "));
		echo "<script>alert('Option Added'); location.href='srcpoll.php';</script>";
}


?>