<?php
session_start();
include('../connection/connectiondb.php');

$insertUser = 'INSERT INTO user_attendance(firstName,lastName,email,password,dob) Values(
    "'.$_POST["fname"].'","'.$_POST["lname"].'",
    "'.$_POST["email"].'","'.$_POST["password"].'",
    "'.$_POST["dob"].'"
    )';
$con -> query($insertUser);
 if ( mysqli_query($con,$insertUser) === true ){
   $_SESSION["fname"] = $_POST["fname"];
   $_SESSION["lname"] = $_POST["lname"];
   $_SESSION["email"] = $_POST["email"];
   $_SESSION["password"] = $_POST["password"];
   $_SESSION["dob"] = $_POST["dob"];
   return header('Location:../admin.php');

 } else{
    echo " insert unSuccessfully";
    echo $insertUser.mysqli_error($con);
 }

$con-> close();
?>

