<?php
include('../connection/connectiondb.php');
date_default_timezone_set("Asia/Bangkok");
$dateTime = date('Y/m/d H:i:s');
if ( isset($_POST["txtLeave"])) {
    $idLeave = $_POST["txtid"];
    $queryLeaveEmployee = "UPDATE user_attendance SET end_date = '$dateTime' WHERE user_Id = '$idLeave' ";
    if ( mysqli_query($con,$queryLeaveEmployee)) {
        header("Location:../signIn.php");
    }
} else {
    echo "error to user Leave..!";
}

$con -> close();
?>