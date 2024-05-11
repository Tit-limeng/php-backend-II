<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/logIn.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Administrator</title>
</head>
<body>
<div class="crop">
        <div class="box-signin" data-aos="zoom-in-up">
            <form action="../query/queryAdmin.php" method="post">
                <h1 data-aos="fade-up">Login</h1>
                <span>Email</span>
                <div class="username-input">
                    <div class="username-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="username-label">
                        <input name="email" autocomplete="off" class="input-email" type="text" placeholder="type your username">
                    </div>
                </div>
                <p class="messageEmail">
                    <!-- <?php
                            // if (isset($_POST["btnLogIn"])) {
                            // validationEmail();
                            // }
                            ?> -->
                </p>
                <span>Password</span>

                <div class="password-input">
                    <div class="password-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="password-label">
                        <input name="password" class="input-password" type="password" placeholder="type your password">
                    </div>

                </div>
                <p class="messagePassword">
                    <!-- <?php
                            // if (isset($_POST["btnLogIn"])) {
                            // validationPassword();
                            // }
                            ?> -->
                </p>

                <div class="btn-login">
                    <a href="./loading/success.php"><button name="btnLogIn" onclick="validationAll()" class="btnLogIn">Login</button></a>
                </div>

        </div>

        </form>
    </div>
    
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>