<?php
include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `file` FROM `seminar` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/img/seminar/$row[file]");}
$delete = mysqli_query($conn,("DELETE FROM `seminar` WHERE `log`='$num'"));
echo "<script>alert('Seminar Deleted!'); location.href='srcseminar.php';</script>";


?>