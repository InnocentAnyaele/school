<?php
include ('db.php');

if (isset($_POST['add'])){

    $title = $_POST['title'];
    $name = $_POST['name'];
    $content = $_POST['message'];
    $image = $_FILES['image']['name'];
    $target = "assets/img/info/".basename($_FILES['image']['name']);
 
    
    $filePath = realpath($_FILES["image"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "image/")or empty($image)){

        $unique = uniqid().time();
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imagename = $unique.'.'.$extension;
        $imagename = mysqli_real_escape_string($conn,$imagename);

        $add = mysqli_query($conn,("INSERT INTO `info`(`title`, `image`, `content`, `name`) VALUES ('$title','$imagename','$content','$name')"));

        $imagetarget = "assets/img/info/".$imagename;
        $imageupload = move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget);

            echo "<script>alert('Info Posted!'); location.href='srcinfo.php';</script>";
    }
    else{
        echo "<script>alert('Wrong file type!'); location.href='srcinfo.php';</script>";
    }

   
}

?>