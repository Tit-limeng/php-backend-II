<?php

include('../connection/connectiondb.php');
$id = $_GET["id"];
$deleteData = 'DELETE FROM user_attendance WHERE user_Id = '.$id.'';
 if ( mysqli_query($con,$deleteData) ){
    header("Location:http://localhost/lesson/oop/admin.php");
   $con -> close();
 }
?>
