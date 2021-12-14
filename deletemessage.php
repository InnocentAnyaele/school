<?php
include ('db.php');

$number = $_GET['id']; 

    $delete = mysqli_query($conn,("DELETE FROM `message` WHERE `log`='$number'"));
    header ('Location: srcmessage.php');

?>