<?php
include ('db.php');

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $target = "assets/doc/budget/".basename($_FILES['image']['name']);

    
    $filePath = realpath($_FILES["image"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "application/")){
        $add = mysqli_query($conn,("INSERT INTO `budget` (`title`,`file`) VALUES ('$title','$image')"));

        $send = move_uploaded_file($_FILES['image']['tmp_name'], $target);  
    
        echo "<script>confirm('Budget Added!'); location.href='srcbudget.php';</script>";
    }
    else {

        echo "<script>alert('Wrong file type!'); location.href='srcbudget.php';</script>";
    }


}


?>