<?php
include ('db.php');

if (isset($_POST['buy'])){
$readnumber = $_POST['receiver'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$info = $_POST['message'];

$receiver = mysqli_query($conn,("SELECT `email` FROM `product` WHERE `log`='$readnumber'"));
while ($row=mysqli_fetch_assoc($receiver)){
    $to = $row['email'];
    $htmlcontent = " <b>You have a purchase request!</b><br>
    Name : $name <br>
    Email : $email <br>
    Phone : $phone <br>
    Order : $info" ;
    $subject = "AUCC SRC Purchase Request";
    $headers = "From: innocentanyaele@gmail.com" . "\r\n" .

    // set php script in xampp to send message from php  

$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
    $send = mail ($to,$subject,$htmlcontent,$headers);
         
    if( $send == true ) {
        echo "<script>alert('Purchase Made!'); location.href='srcproduct.php';</script>";
    }
}
}
echo "<script>alert('Still In Production'); location.href='srcproduct.php';</script>";
?>