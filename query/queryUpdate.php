<?php

include('../Attendance.php');
$conn = new Attendance();
$conn->connection();

// $dateTime = date('Y/m/d :h:m:s');
$user_Id = $conn->user_id = $_POST["user_Id"];
$firstName = $conn->firstName = $_POST["fname"];
$lastName = $conn->lastName = $_POST["lname"];
$Email = $conn->email = $_POST["email"];
$Password = $conn->password = $_POST["password"];
$gender = $conn->gender = $_POST["gender"];
$DateOfBirth = $conn->dob = $_POST["dob"];

$updateData = "UPDATE user_attendance SET firstname = '$firstName',lastname='$lastName',email='$Email',password='$Password',gender='$gender' WHERE user_Id ='$user_Id'";


 if ( mysqli_query($conn->connection(),$updateData)) {
    header("Location:../admin.php");
    $conn->connectionClose();
 } else { 
    echo $data.mysqli_error($conn->connection());
 }

?>