<?php
include ('db.php');

if (isset($_POST['add'])){
    $voter = $_POST['voter'];

    $select = mysqli_query($conn,("SELECT * FROM `voters` WHERE `student_id` = '$voter'"));

    if (mysqli_num_rows($select)>0){
        echo "<script>alert('Voter already exists!'); location.href='srcvoter.php';</script>";
    }

    else {
        $insert = mysqli_query($conn,("INSERT INTO `voters` (`student_id`) VALUES ('$voter') "));

        if ($insert){
            echo "<script>alert('Voter Added!'); location.href='srcvoter.php';</script>";
        }
        else {
            echo "<script>alert('Failed!'); location.href='srcvoter.php';</script>";
        }
    }

    

}

?>