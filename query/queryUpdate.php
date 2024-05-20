<?php
include('../Attendance.php');

$update = new Attendance();
$update -> connection();
$update -> updateUser();
$update -> connectionClose();

?>