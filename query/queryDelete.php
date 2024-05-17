<?php

include('../Attendance.php');

$conn = new  Attendance();
$conn -> connection();
$id = $_GET["id"];
$deleteData = 'DELETE FROM user_attendance WHERE user_Id = '.$id.'';
 if ( mysqli_query($conn->connection(),$deleteData) ){
    header("Location:../admin.php");
   $conn -> connectionClose();
 }
?>
