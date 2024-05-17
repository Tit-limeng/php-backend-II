<?php
session_start();
include('../Attendance.php');
$conn = new Attendance();
 $condb =$conn -> connection();
if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
    $Email =$conn->email = $_POST["email"];
    $Password = $conn->password = $_POST["password"];

    $queryAdmin = "SELECT * FROM admin WHERE email = '$Email' AND password = '$Password'";
    $resualt = $condb -> query($queryAdmin);

    if ($resualt -> num_rows > 0 ) {
        $_SESSION["email"] = $Email;
        $_SESSION["password"] = $Password;
        header("Location:../admin.php");
    } else {
        header("Location:../admin/logIn.php?error to access Admin");
    }
} 

$conn ->connectionClose();
?>