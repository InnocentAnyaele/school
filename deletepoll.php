<?php 
include ('db.php');

if(isset($_GET['number'])){
	$id = $_GET['number'];

	$deletepolltitle = mysqli_query($conn,("DELETE FROM `poll_title` WHERE `log`='$id'"));
	// $deletepollname = mysqli_query($conn,("DELETE FROM `poll_name` WHERE `log`='$id'"));
	// $deletevote = mysqli_query($conn,("DELETE FROM `vote` WHERE `log`='$id'"));
	echo "<script>alert('Poll deleted'); location.href='srcpoll.php';</script>";




}


?>