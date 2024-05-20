<?php
include('../Attendance.php');
$conn = new Attendance();
$conn->connection();
$conn->checkIn();
$conn->checkOut();
$conn->connectionClose();
