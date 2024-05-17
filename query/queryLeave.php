<?php
include('./Attendance.php');
$conn = new Attendance();
date_default_timezone_set("Asia/Bangkok");
$dateTime = $conn->end_date= date('Y/m/d H:i:s');
if ( isset($_POST["txtLeave"])) {
    $idLeave = $_POST["txtid"];
    $queryLeaveEmployee = "UPDATE user_attendance SET end_date = '$dateTime' WHERE user_Id = '$idLeave' ";
    if ( mysqli_query($conn->connection(),$queryLeaveEmployee)) {
        header("Location:../signIn.php");
    }
} else {
    echo "error user Leave..!";
}

$conn->connectionClose();
?>