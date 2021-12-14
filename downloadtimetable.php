<?php
include ('db.php');

$num = $_GET['number'];

$get = mysqli_query($conn,("SELECT * FROM `timetable` WHERE `log`='$num'"));

$row = mysqli_fetch_assoc($get);
$filePath = "assets/doc/timetable/" . $row['file']; 

if(file_exists($filePath)) {
$fileName = basename($filePath);
$fileSize = filesize($filePath);
header("Cache-Control: private");
header("Content-Type: application/stream");
header("Content-Length: ".$fileSize);
header("Content-Disposition: attachment; filename=".$fileName);
readfile ($filePath);                   
exit();
}
else {
    echo "<script>alert('File doesn't exist!'); location.href='srctimetable.php';</script>";
}

?>