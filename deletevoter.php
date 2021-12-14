<?php
include ('db.php');

$log = $_GET['id']; 

    $delete = mysqli_query($conn,("DELETE FROM `voters` WHERE `log`='$log'"));

    if ($delete){
        echo "<script>alert('Voter Deleted!'); location.href='srcvoter.php';</script>";
    }
    else {
        echo "<script>alert('Failed'); location.href='srcvoter.php';</script>";
    }
    

?>