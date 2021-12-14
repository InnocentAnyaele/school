<?php
include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `file` FROM `budget` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/doc/budget/$row[file]");}
$delete = mysqli_query($conn,("DELETE FROM `budget` WHERE `log`='$num'"));
echo "<script>alert('Budget Deleted!'); location.href='srcbudget.php';</script>";


?>