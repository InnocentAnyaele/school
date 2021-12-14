<?php
include ('db.php');

if (isset($_POST['submit'])){
    if (isset($_POST['purchase'])){
        $purchase = "product";
    }
    else{
        $purchase = "advertisement";
    }
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $product = $_FILES['product']['name'];
    $target = "assets/img/product/".basename($_FILES['product']['name']);

    $filePath = realpath($_FILES["product"]["tmp_name"]);

    $type = mime_content_type("$filePath");
    if (strstr($type, "image/") or strstr($type,"video/") or empty($product)){
        $unique = uniqid().time();
        $extension = pathinfo($_FILES['product']['name'], PATHINFO_EXTENSION);
        $productname = $unique.'.'.$extension;
        $productname = mysqli_real_escape_string($conn,$productname);

        $add = mysqli_query($conn,("INSERT INTO `product` (`title`,`name`,`email`,`phone`,`price`,`info`,`file`,`purchase`) VALUES ('$title','$name','$email','$phone','$price','$info','$productname','$purchase')"));

        $producttarget = "assets/img/product/".$productname;
        $productupload = move_uploaded_file($_FILES["product"]["tmp_name"], $producttarget);  
    
        echo "<script>alert('Product Added!'); location.href='studentproduct.php';</script>";
    }
    else{
        echo "<script>alert('Wrong file type!'); location.href='studentproduct.php';</script>";
    }
 

  
}



?>