<?php
include('../connection/connectiondb.php');

date_default_timezone_set("Asia/Bangkok");
$dateTime = date('Y/m/d H:i:s');

// echo $dateTime;

if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

     $signIn = "SELECT * FROM user_attendance WHERE email='$email' AND password='$password'";
     $executeSignIn = mysqli_query($con,$signIn);
     if ( mysqli_num_rows($executeSignIn) > 0) {
        $id = mysqli_fetch_assoc($executeSignIn);
        $user_Id = $id["user_Id"];
        echo $user_Id;
        $dateStart_date = "UPDATE user_attendance SET start_date = '$dateTime' where user_Id=$user_Id";
        mysqli_query($con,$dateStart_date);
        header("Location:../loading/success.php?id=$user_Id");
     }

    //  if ( $executeSignIn -> num_rows > 0 ) {
    //      $_SESSION["email"] = $email ;
    //      $dateStart_date = "UPDATE user_attendance SET start_date = '$dateTime'";
    //      if ( mysqli_query($con,$dateStart_date)) {
    //         header("Location:../loading/success.php"); 
    //      }
    //  } else {
    //     header("Location:../signIn.php?error_SignIn");
    // }
} 

$con -> close();

?>