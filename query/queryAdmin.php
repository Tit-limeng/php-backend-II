<?php
session_start();
include('../connection/connectiondb.php');

if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $queryAdmin = "SELECT * FROM user_attendance WHERE email = '$email' AND password = '$password'";
    $resualt = $con -> query($queryAdmin);

    if ($resualt -> num_rows > 0 ) {
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        header("Location:../admin.php");
    } else {
        header("Location:../admin/logIn.php?error to access Admin");
    }
} 

$con -> close();



?>