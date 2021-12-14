<?php
include ('db.php');

    $num = $_GET['number'];

    $path = mysqli_query($conn,("SELECT `image` FROM `info` WHERE `log`='$num'"));
    if (!empty($row=mysqli_fetch_assoc($path))){
        unlink("assets/img/info/$row[image]");}
    $delete = mysqli_query($conn,("DELETE FROM `info` WHERE `log`='$num'"));
echo "<script>alert('Info Deleted!'); location.href='srcinfo.php';</script>";

?>