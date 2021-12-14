<?php

include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `file` FROM `timetable` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/doc/timetable/$row[file]");}
$delete = mysqli_query($conn,("DELETE FROM `timetable` WHERE `log`='$num'"));
echo "<script>alert('Timetable Deleted!'); location.href='srctimetable.php';</script>";


?>