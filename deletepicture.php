<?php
include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `image` FROM `gallery` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/img/gallery/$row[image]");}
$delete = mysqli_query($conn,("DELETE FROM `gallery` WHERE `log`='$num'"));
echo "<script>alert('Picture Deleted!'); location.href='srcgallery.php';</script>";


?>