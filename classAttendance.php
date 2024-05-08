<?php

class Attendance{
    public $user_id;
    public $firstName;
    public $lastName;
    public $password;
    public $email;
    public $dob;
    public $date;
    public $start_date;
    public $end_date;
    public function getAttendance(){
        if ( session_id() == ""){
            session_start();
        }
        $this -> user_id = $_SESSION["userid"];
        $this-> firstName = $_SESSION["fisrtName"];
        $this-> lastName = $_SESSION["lastName"];
        $this -> email = $_SESSION["email"];
        $this -> password = $_SESSION["password"];
        $this -> dob = $_SESSION["dob"];
        $this -> date = $_SESSION["date"];
        $this -> start_date = $_SESSION["start_date"];
        $this -> end_date = $_SESSION["end_date"];
    }

    public function getSession(){
        if ( session_id() == ""){
            session_start();
        }

        $_SESSION["userid"] = $this -> user_id;
        $_SESSION["firstName"] = $this -> firstName;
        $_SESSION["lastName"] = $this -> lastName;
        $_SESSION["email"] = $this -> email ;
        $_SESSION["password"] = $this -> password ;
        $_SESSION["date"] = $this -> date ;
        $_SESSION["dob"] = $this -> dob; 
        $_SESSION["start_date"]  = $this -> start_date;
        $_SESSION["end_date"]  = $this -> end_date;
    }
    function isLogIn(){
        return isset($_SESSION["email"]);
    }
    
    function logOut(){
        session_destroy(); 
        header("location:logIn.php");
    }
}

$attendace = new Attendance();

if ( $attendace->isLogIn() ) {
    header('location:index.php');
}

?>