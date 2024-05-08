<?php

include('../connection/connectiondb.php');

// $dateTime = date('Y/m/d :h:m:s');

$updateData = 'UPDATE  user_attendance SET firstName = "'.$_POST["fname"].'",
lastName = "'.$_POST["lname"].'",email = "'.$_POST["email"].'",password= "'.$_POST["password"].'",
 dob="'.$_POST["dob"].'" WHERE user_Id = "'.$_POST["user_Id"].'" ';


 if ( mysqli_query($con,$updateData)) {
    header("Location:../admin.php");
    $con -> close();
 } else { 
    echo $data.mysqli_error($con);
 }

?>