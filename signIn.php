<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signIn.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/waveform.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Sign In</title>
</head>

<body>
    <?php

    // function validationEmail()
    // {
    //     if ($_POST["email"] == "") {
    //         echo "Please Input Your Email...!";
    //     } else if (strlen($_POST["email"]) < 10) {
    //         echo "Your Email Is Not Enough...!";
    //     }
    // }

    // function validationPassword()
    // {
    //     if ($_POST["password"] == "") {
    //         echo "Password is Require ...!";
    //     } else if (strlen( $_POST["password"]) < 8) {
    //         echo "Password at least 8 Character ";
    //     }
    // }


    // function validationAll()
    // {
    //     if ( strlen($_POST["email"]) >=10 && strlen($_POST["password"]) >=8 ) {
    //         $_SESSION["email"] = $_POST["email"];
    //         $_SESSION["password"] = $_POST["password"];
    //         header("Location:index.php");
    //     }
    // }

    // if (isset($_POST["btnLogIn"]) ) {
    //     validationAll();
    // }
    // 
    ?>
    <div class="main">
        <l-waveform size="70" stroke="4.5" speed="1" color="#00008B"></l-waveform>
    </div>

    <div class="crop">
        <div class="box-signin" data-aos="zoom-in-up">
        <h1 data-aos="fade-up">Attendances</h1>

            <form action="../oop/query/querySignIn.php" method="post">
                <span>User ID :</span>
                <div class="username-input">
                    <div class="username-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="username-label">
                        <input name="user_Id" autocomplete="off" class="input-email" type="number" placeholder="type your ID">
                    </div>
                </div>
                <p class="messageEmail">
                    <!-- <?php
                            // if (isset($_POST["btnLogIn"])) {
                            // validationEmail();
                            // }
                            ?> -->
                </p>
                <!-- <span>Password</span> -->

                <!-- <div class="password-input">
                    <div class="password-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="password-label">
                        <input name="password" class="input-password" type="password" placeholder="type your password">
                    </div>

                </div> -->
                <p class="messagePassword">
                    <!-- <?php
                            // if (isset($_POST["btnLogIn"])) {
                            // validationPassword();
                            // }
                            ?> -->
                </p>

                <div class="btn-login">
                    <a href="./loading/success.php"><button name="btnCheckIn" onclick="validationAll()" class="btnLogIn">CheckIn</button></a>
                    <a href="./loading/success.php"><button name="btnCheckOut" onclick="validationAll()" class="btnLogIn">CheckOut</button></a>
                </div>

        </div>

        </form>
    </div>

</body>
<script>
    const main = document.querySelector(".main");
    const crop =document.querySelector(".crop");
    setInterval(() => {
        main.style.display = 'none';
        crop.style.display="block";
    }, 3000);
</script>
<!-- <script src="js/Main.js"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>