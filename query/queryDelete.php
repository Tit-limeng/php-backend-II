<?php

include('../Attendance.php');

$conn = new  Attendance();
$conn -> connection();
$conn->deleteEmployee();
$conn -> connectionClose();
?>
