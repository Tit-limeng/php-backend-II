<?php
include('../Attendance.php');
$conn = new Attendance();
$conn->connection();

date_default_timezone_set("Asia/Bangkok");
$start_date = $conn->start_date = date('Y/m/d H:i:s');
$end_date = $conn->end_date = date('Y/m/d H:i:s');

// echo $dateTime;
if ( isset($_POST["btnCheckIn"])){
if ( isset($_POST["user_Id"])  ) {
    
    $user = $conn->user_id = $_POST["user_Id"];

     $signIn = "SELECT * FROM user_attendance WHERE user_Id='$user'";
     $executeSignIn = mysqli_query($conn->connection(),$signIn);
     if ( mysqli_num_rows($executeSignIn) > 0) {
        $id = mysqli_fetch_assoc($executeSignIn);
        $user_Id = $id["user_Id"];
        echo $user_Id;
        $dateStart_date = "UPDATE user_attendance SET start_date = '$start_date' where user_Id=$user_Id";
        mysqli_query($conn->connection(),$dateStart_date);
        header("Location:../loading/success.php?id=$user_Id");
     } else {
        header("Location:../signIn.php?error");
     }
} 
}

if ( isset($_POST["btnCheckOut"])){
    if ( isset($_POST["user_Id"])  ) {
        
        $user = $conn->user_id = $_POST["user_Id"];
    
         $signIn = "SELECT * FROM user_attendance WHERE user_Id='$user'";
         $executeSignIn = mysqli_query($conn->connection(),$signIn);
         if ( mysqli_num_rows($executeSignIn) > 0) {
            $id = mysqli_fetch_assoc($executeSignIn);
            $user_Id = $id["user_Id"];
            echo $user_Id;
            $dateStart_date = "UPDATE user_attendance SET end_date = '$end_date' where user_Id=$user_Id";
            mysqli_query($conn->connection(),$dateStart_date);
            header("Location:../loading/success.php?id=$user_Id");
         } else {
            header("Location:../signIn.php?error");
         }
    } 
    }
    

$conn->connectionClose();

?>