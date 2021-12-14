<?php

include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `file` FROM `handout` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/doc/handout/$row[file]");}
$delete = mysqli_query($conn,("DELETE FROM `handout` WHERE `log`='$num'"));
echo "<script>alert('Handout Deleted!'); location.href='srchandout.php';</script>";


?>