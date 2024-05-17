<?php
session_start();
include('../Attendance.php');

$conn = new Attendance();

$conn -> connection();

$firstName = $conn -> firstName = $_POST["fname"];
$lastName = $conn -> lastName = $_POST["lname"];
$gender = $conn -> gender = $_POST["gender"];
$Password = $conn -> password = $_POST["password"];
$Email = $conn -> email = $_POST["email"];
$DateOfBirth = $conn -> dob = $_POST["dob"];


$insertUser = "INSERT INTO user_attendance(firstName,lastName,gender,email,password,dob) Values(
    '$firstName','$lastName',
    '$gender','$Email','$Password',
    '$DateOfBirth'
    )";
 if ( mysqli_query($conn->connection(),$insertUser) === true ){
   $_SESSION["fname"] = $_POST["fname"];
   $_SESSION["lname"] = $_POST["lname"];
   $_SESSION["email"] = $_POST["email"];
   $_SESSION["gender"] = $_POST["gender"];
   $_SESSION["password"] = $_POST["password"];
   $_SESSION["dob"] = $_POST["dob"];
   return header('Location:../admin.php');

 } else{
    echo " insert unSuccessfully";
    echo $insertUser.mysqli_error($conn->connection());
 }

$conn-> connectionClose();
?>

