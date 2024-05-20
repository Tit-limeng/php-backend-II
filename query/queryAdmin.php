<?php
include('../Attendance.php');
$conn = new Attendance();
$conn->connection();
$conn->adminLogIn();
$conn ->connectionClose();
?>