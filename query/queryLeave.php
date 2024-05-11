<?php
include('../connection/connectiondb.php');
date_default_timezone_set("Asia/Bangkok");
$dateTime = date('Y/m/d H:i:s');
$id = $_GET["id"];
if ( isset($_POST["txtLeave"])) {
    $queryLeaveEmployee = "UPDATE user_attendance SET end_date = '$dateTime' WHERE user_Id = '$id' ";
    $exLeave = $con -> query($queryLeaveEmployee);
}

$con -> close();
?>