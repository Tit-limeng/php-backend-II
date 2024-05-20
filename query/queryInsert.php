<?php

include('../Attendance.php');
$userAdd = new Attendance();
$userAdd->connection();

$userAdd->insertEmployee();

$userAdd->connectionClose();
