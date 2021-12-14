<?php
include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `image` FROM `news` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/img/news/$row[image]");}
$delete = mysqli_query($conn,("DELETE FROM `news` WHERE `log`='$num'"));
echo "<script>alert('News Deleted!'); location.href='srcnews.php';</script>";


?>