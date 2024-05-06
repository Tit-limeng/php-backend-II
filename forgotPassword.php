<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Forgot Password</title>
</head>

<body>

    <?php
    session_start();
    function messageValidation()
    {
        if ($_POST["user"] == "" && $_POST["password"] == "") {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                User ID and Password are required ...!
        ​​          </div>';
        } else if( strlen($_POST["user"]) >= 3 && strlen($_POST["password"]) >= 8 ){
            $_SESSION["user"] = $_POST["user"];
            $_SESSION["password"] = $_POST["password"];
            header("Location:index.php");
        }  else if ( strlen($_POST["user"]) < 3 && $_POST["password"] == "" ) {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                 User ID at least 3 character
        ​​          </div>';
        }else if ( strlen($_POST["user"]) < 3 && strlen($_POST["password"]) < 8 ) {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                 User ID and Password is not enough..!
        ​​          </div>';
        } else if ( strlen($_POST["password"]) < 8 && $_POST["user"] == "") {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                Password at least 8 character ...!
   ​​          </div>';
        } else if ( strlen($_POST["user"]) >= 3 && strlen($_POST["password"]) < 8 ) {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
                Password at least 8 character ...!
   ​​          </div>';
        } else if ( strlen($_POST["password"]) >= 8  && strlen( $_POST["user"]) < 3 ) {
            echo '<div data-aos="fade-up" class="alert alert-danger text-center container w-50" role="alert">
            User at least 3 character ...!
​​          </div>';
        }
    }

    // function messagePassword(){
    //     if ($_POST["password"] == "") {
    //         echo "Password is Require ...!";
    //     } else if (strlen( $_POST["password"]) < 8) {
    //         echo "Password at least 8 Character ";
    //     }
    // }
    ?>


    <h1 class="text-center my-4" ​ data-aos="fade-up">Forgot Password</h1>

    <form action="forgotPassword.php" class="my-3 gap-3" method="post">

        <?php
        if (isset($_POST["btnsubmit"])) {
            messageValidation();
        }
        ?>

        <br>
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1100">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">User Id :</label>
                <div class="col-sm-10">
                    <input name="user" type="text" class="form-control" id="colFormLabel" placeholder="Enter your ID">
                </div>
            </div>
        </div>
        <br>
        <div class=" w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1200">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="colFormLabel" placeholder="Enter your password">
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center" style="margin-left:600px">
            <a href="signUp.php">
                <input class="btn btn-link" type="button" value="Sign Up" data-aos="flip-up" data-aos-duration="1300">
            </a>
        </div>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <button data-aos="zoom-in-up" name="btnsubmit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>