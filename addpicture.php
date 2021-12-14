<?php
include ('db.php');

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
$image = mysqli_real_escape_string($conn,$image);
    $target = "assets/img/gallery/".basename($_FILES['image']['name']);

    $filePath = realpath($_FILES["image"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "image/")){

        $unique = uniqid().time();
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imagename = $unique.'.'.$extension;
        $imagename = mysqli_real_escape_string($conn,$imagename);

        $add = mysqli_query($conn,("INSERT INTO `gallery` (`title`,`image`) VALUES ('$title','$imagename')"));

        $imagetarget = "assets/img/gallery/".$imagename;
        $imageupload = move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget);

    
        echo "<script>alert('Picture Added!'); location.href='srcgallery.php';</script>";
    }
    else{
        echo "<script>alert('Wrong file type!'); location.href='srcgallery.php';</script>";
    }

  
}


?>