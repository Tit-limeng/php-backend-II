<?php

class Attendance{
    public $id ;
    public $username;
    public $gender;
    public $password;
    public $email;
    public $start_date;
    public $end_date;
    public $date;
    public $logIn ;

    private function getAttendance(){
        if ( session_id() == ""){
            session_start();
        }
        $this -> id = $_SESSION["id"];
        $this -> username = $_SESSION["username"];
        $this -> gender = $_SESSION["gender"];
        $this -> password = $_SESSION["password"];
        $this -> email = $_SESSION["email"];
        $this -> date = $_SESSION["date"];
        $this -> logIn = $_SESSION["logIn"];
    }

    public function getSession(){
        if ( session_id() == ""){
            session_start();
        }

        $_SESSION["id"] = $this -> id;
        $_SESSION["username"] = $this -> username;
        $_SESSION["gender"] = $this -> gender;
        $_SESSION["password"] = $this -> password ;
        $_SESSION["email"] = $this -> email ;
        $_SESSION["date"] = $this -> date;  
        $_SESSION["logIn"] = $this -> logIn;
    }

    function __construct(){
    //    if ( $_SESSION["logIn"] == true && isset($_SESSION["logIn"])) {
        $this -> getAttendance();
        $this -> logIn = $_SESSION["logIn"];
    //    }
    }
    function isLogIn(){
        return isset($_SESSION["email"]);
    }
    
    function logOut(){
        session_destroy(); 
        header("location:logIn.php");
    }
}

// $attendace = new Attendance();

// if ( $attendace->isLogIn() ) {
//     header('location:home.php');
// }

?>