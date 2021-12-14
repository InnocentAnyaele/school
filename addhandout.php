<?php
include ('db.php');

if (isset($_POST['add'])){
    $title = $_POST['title'];
    $file = $_FILES['file']['name'];
    $target = "assets/doc/handout/".basename($_FILES['file']['name']);
 

    $filePath = realpath($_FILES["file"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "application/")){
        $add = mysqli_query($conn,("INSERT INTO `handout` (`title`,`file`) VALUES ('$title','$file')"));

    
        $send = move_uploaded_file($_FILES['file']['tmp_name'], $target);  
            echo "<script>alert('Time Table Posted!'); location.href='srchandout.php';</script>";
    }
    else {
        echo "<script>alert('Wrong file type!'); location.href='srchandout.php';</script>";
    }

  
}



?>