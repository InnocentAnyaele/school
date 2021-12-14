<?php
include ('db.php');

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['message'];
    $link = $_POST['link'];
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $target = "assets/img/news/".basename($_FILES['image']['name']);
 

    $filePath = realpath($_FILES["image"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "image/") or empty($image)){

        $unique = uniqid().time();
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imagename = $unique.'.'.$extension;
        $imagename = mysqli_real_escape_string($conn,$imagename);

        $insert = mysqli_query($conn,("INSERT INTO `news` (`title`,`image`,`link`,`content`,`name`) VALUES ('$title','$imagename','$link','$content','$name')"));

        $imagetarget = "assets/img/news/".$imagename;
        $imageupload = move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget);  
    
    
        echo "<script>alert('News Added!'); location.href='srcnews.php';</script>";
    }
    else {
        echo "<script>alert('Wrong file type!'); location.href='srcnews.php';</script>";
    }

  
}



?>