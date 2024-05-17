<?php

class Attendance{
    public $user_id;
    public $firstName;
    public $lastName;
    public $password;
    public $gender ;
    public $email;
    public $dob;
    // public $date;
    public $start_date;
    public $end_date;
    // connection db 

    public $connection ;
    private $serve = "localhost";
    private $userName = "root";
    private $passwordDb = "";
    private $nameDb = "attendencedb";

    public function connection() {
        $this -> connection = new mysqli($this->serve,$this->userName,$this->passwordDb,$this -> nameDb);
        return $this -> connection;
    }

    public function connectionClose() { 
       return $this -> connection() -> close();
    }
}

?>