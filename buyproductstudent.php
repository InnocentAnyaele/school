<?php
// include ('db.php');

// if (isset($_POST['buy'])){
// $readnumber = $_POST['receiver'];
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $info = $_POST['message'];

// $receiver = mysqli_query($conn,("SELECT `email` FROM `product` WHERE `log`='$readnumber'"));
// while ($row=mysqli_fetch_assoc($receiver)){
//     $to = $row['email'];
//     $htmlcontent = " <b>You have a purchase request!</b> <br><br><br> Name : $name <br><br> Email : $email <br><br> Phone : $phone <br><br> Order : $info" ;
//     $subject = "SRC Purchase Request";
//     $headers = "From: example@gmail.com" . "\r\n" .

//      // set php script in xampp to send message from php  

    
//     $send = mail ($to,$subject,$htmlcontent,$headers);
         
//     if( $send == true ) {
//         echo "<script>alert('Purchase Made!'); location.href='studentproduct.php';</script>";
//     }
// }
// }
echo "<script>alert('Still In Production'); location.href='studentproduct.php';</script>";
?>