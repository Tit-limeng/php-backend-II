<?php

$con = new mysqli("localhost","root","","attendencedb");

if ( $con -> connect_error ){
    die("connection error".$con -> connect_error);
}

?>