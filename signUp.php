<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>

<body>

<?php
 function signUpValidation(){
    if ( $_POST["fname"] == "" && $_POST["lname"] == "" && $_POST["email"] =="" && $_POST["password"] =="" ) {
        echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                All input is required ...!
        ​​          </div>';
    } else if ( strlen($_POST["fname"]) < 2 || strlen($_POST["lname"]) < 2  || strlen($_POST["email"]) < 10 || strlen($_POST["password"]) < 8) {
        echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                Your input is not enough...!
        ​​          </div>';
    } else if ( strlen($_POST["fname"]) >= 2 && strlen($_POST["lname"])>= 2 && strlen($_POST["email"]) >=10 && strlen($_POST["password"]) >=8 ) {
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        header("Location:index.php");
    }
 }
?>
       
    <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" class="text-center my-2 ">Sign Up Account</h1>
    <form action="signUp.php" class="my-1" method="post">
        <?php
         if ( isset($_POST["btncreate"]) ) {
            signUpValidation();
         }
        ?>
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up"  data-aos-duration="1100">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">First Name :</label>
                <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" id="colFormLabel" placeholder="First Name">
                </div>
            </div>
        </div>
        <div class=" w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1200">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Last Name :</label>
                <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" id="colFormLabel" placeholder="Last Name">
                </div>
            </div>
        </div>



        <div class="w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1300">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="colFormLabel" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1400">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="colFormLabel" placeholder="Enter your Password">
                </div>
            </div>
        </div>

        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">DOB :</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="colFormLabel" placeholder="" auto-complete="off">
                </div>
            </div>
        </div>
        <br>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <button  name="btncreate" data-aos="zoom-in-up" class="btn btn-primary">Crete Account</button>
        </div>
        <br>
        <div class="d-flex container align-items-center">
            <button class="btn btn-dark" style="margin-left: 230px; margin-top:-110px;"><a href="signIn.php">Back</a></button>
            
        </div>
    </form>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>