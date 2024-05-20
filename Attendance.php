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
    }

    public function updateUser()
    {
        $user_Id = $this->user_id = $_POST["user_Id"];
        $firstName = $this->firstName = $_POST["fname"];
        $lastName = $this->lastName = $_POST["lname"];
        $Email = $this->email = $_POST["email"];
        $Password = $this->password = $_POST["password"];
        $gender = $this->gender = $_POST["gender"];
        $DateOfBirth = $this->dob = $_POST["dob"];


        $updateData = "UPDATE user_attendance SET firstname = '$firstName',lastname='$lastName',email='$Email',password='$Password',gender='$gender',dob= '$DateOfBirth' WHERE user_Id ='$user_Id'";
        if (mysqli_query($this->connection(), $updateData)) {
            header("Location:../admin.php");
            $this->connectionClose();
        } else {
            echo $updateData . mysqli_error($this->connection());
        }
    }

    public function checkIn()
    {
        date_default_timezone_set("Asia/Bangkok");
        $start_date = $this->start_date = date('Y/m/d H:i:s');
        if (isset($_POST["btnCheckIn"])) {
            if (isset($_POST["user_Id"])) {

                $user = $this->user_id = $_POST["user_Id"];

                $signIn = "SELECT * FROM user_attendance WHERE user_Id='$user'";
                $executeSignIn = mysqli_query($this->connection(), $signIn);
                if (mysqli_num_rows($executeSignIn) > 0) {
                    $id = mysqli_fetch_assoc($executeSignIn);
                    $user_Id = $id["user_Id"];
                    echo $user_Id;
                    $dateStart_date = "UPDATE user_attendance SET start_date = '$start_date' where user_Id=$user_Id";
                    mysqli_query($this->connection(), $dateStart_date);
                    header("Location:../loading/success.php?id=$user_Id");
                } else {
                    header("Location:../signIn.php?error");
                }
            }
        }
    }

    public function checkOut()
    {
        date_default_timezone_set("Asia/Bangkok");
        $end_date = $this->end_date = date('Y/m/d H:i:s');
        if (isset($_POST["btnCheckOut"])) {
            if (isset($_POST["user_Id"])) {

                $user = $this->user_id = $_POST["user_Id"];

                $signIn = "SELECT * FROM user_attendance WHERE user_Id='$user'";
                $executeSignIn = mysqli_query($this->connection(), $signIn);
                if (mysqli_num_rows($executeSignIn) > 0) {
                    $id = mysqli_fetch_assoc($executeSignIn);
                    $user_Id = $id["user_Id"];
                    echo $user_Id;
                    $dateStart_date = "UPDATE user_attendance SET end_date = '$end_date' where user_Id=$user_Id";
                    mysqli_query($this->connection(), $dateStart_date);
                    header("Location:../loading/success.php?id=$user_Id");
                } else {
                    header("Location:../signIn.php?error");
                }
            }
        }
    }

    public function adminLogIn()
    {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $Email = $this->email = $_POST["email"];
            $Password = $this->password = $_POST["password"];

            $queryAdmin = "SELECT * FROM admin WHERE email = '$Email' AND password = '$Password'";
            $resualt = $this->connection()->query($queryAdmin);

            if ($resualt->num_rows > 0) {
                $_SESSION["email"] = $Email;
                $_SESSION["password"] = $Password;
                header("Location:../admin.php");
            } else {
                header("Location:../admin/logIn.php?error to access Admin");
            }
        }
    }

    public function deleteEmployee()
    {
        $id = $_GET["id"];
        $deleteData = 'DELETE FROM user_attendance WHERE user_Id = ' . $id . '';
        if (mysqli_query($this->connection(), $deleteData)) {
            header("Location:../admin.php");
        }
    }
}
