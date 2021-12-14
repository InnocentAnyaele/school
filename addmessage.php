<?php
include ('db.php');

if (isset($_POST['edit'])){
    $message = $_POST['message'];

    $add = mysqli_query($conn,("UPDATE `welcome` SET `message`='$message' WHERE `log`=1 "));
    header ('Location: srcpage.php');

}

?>