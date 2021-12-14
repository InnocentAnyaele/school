<?php
include ('db.php');

if (isset($_POST['add'])){
$title = $_POST['title'];
$id = $_POST['id'];
// $name = $_POST['name'];

$check = mysqli_query($conn,("SELECT * FROM `poll_title` WHERE `log` = '$id'"));

if ( mysqli_num_rows($check) < 1){
		$titleadd = mysqli_query($conn,("INSERT INTO `poll_title`(`log`,`title`) VALUES ('$id','$title') "));
		echo "<script>alert('Select + button in table to add options'); location.href='srcpoll.php';</script>";
	
}
else{
echo "<script>alert('ID already exists!'); location.href='srcpoll.php';</script>";
}



}

?>