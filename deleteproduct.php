<?php
include ('db.php');

    $num = $_GET['number'];
    $path = mysqli_query($conn,("SELECT `file` FROM `product` WHERE `log`='$num'"));
if (!empty($row=mysqli_fetch_assoc($path))){
    unlink("assets/img/product/$row[file]");}
$delete = mysqli_query($conn,("DELETE FROM `product` WHERE `log`='$num'"));
echo "<script>alert('Producted Deleted!'); location.href='srcproduct.php';</script>";
?>