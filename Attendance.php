<?php

class Attendance
{
    public $user_id;
    public $firstName;
    public $lastName;
    public $password;
    public $gender;
    public $email;
    public $dob;
    // public $date;
    public $start_date;
    public $end_date;
    // connection db 

    public $connection;
    private $serve = "localhost";
    private $userName = "root";
    private $passwordDb = "";
    private $nameDb = "attendencedb";

    public function connection()
    {
        $this->connection = new mysqli($this->serve, $this->userName, $this->passwordDb, $this->nameDb);
        return $this->connection;
    }

    public function connectionClose()
    {
        return $this->connection()->close();
    }

    public function insertEmployee()
    {
        // $this->connection();
        $firstName = $this->firstName = $_POST["fname"];
        $lastName = $this->lastName = $_POST["lname"];
        $gender = $this->gender = $_POST["gender"];
        $Password = $this->password = $_POST["password"];
        $Email = $this->email = $_POST["email"];
        $DateOfBirth = $this->dob = $_POST["dob"];

        // insert emp
        $insertUser = "INSERT INTO user_attendance(firstName,lastName,gender,email,password,dob) Values(
            '$firstName','$lastName',
            '$gender','$Email','$Password',
            '$DateOfBirth'
            )";

        if (mysqli_query($this->connection(), $insertUser) === true) {
            return header('Location:../admin.php');
        } else {
            echo " insert unSuccessfully";
            echo $insertUser . mysqli_error($this->connection());
        }

        // $this->connectionClose();
    }

    public function updateUser() {
        $user_Id = $this -> user_id = $_POST["user_Id"];
        $firstName = $this ->firstName = $_POST["fname"];
        $lastName = $this ->lastName = $_POST["lname"];
        $Email = $this ->email = $_POST["email"];
        $Password = $this ->password = $_POST["password"];
        $gender = $this ->gender = $_POST["gender"];
        $DateOfBirth = $this ->dob = $_POST["dob"];

        
        $updateData = "UPDATE user_attendance SET firstname = '$firstName',lastname='$lastName',email='$Email',password='$Password',gender='$gender' WHERE user_Id ='$user_Id'";
        if ( mysqli_query($this->connection(),$updateData)) {
            header("Location:../admin.php");
            $this->connectionClose();
         } else { 
            echo $updateData.mysqli_error($this->connection());
         }
    }
}
