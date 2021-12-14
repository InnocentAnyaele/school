<?php
include ('db.php');

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $target = "assets/img/seminar/".basename($_FILES['image']['name']);

    $filePath = realpath($_FILES["image"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "video/")){ 
        $unique = uniqid().time();
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imagename = $unique.'.'.$extension;
        $imagename = mysqli_real_escape_string($conn,$imagename);

        $add = mysqli_query($conn,("INSERT INTO `seminar` (`title`,`file`) VALUES ('$title','$imagename')"));

        $imagetarget = "assets/img/seminar/".$imagename;
        $imageupload = move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget);
 
    
        echo "<script>alert('Seminar Added!'); location.href='srcseminar.php';</script>";
    }
    else {
        echo "<script>alert('Wrong file type!'); location.href='srcseminar.php';</script>";
    }

  
}


?>