<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signIn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Sign In</title>
</head>

<body>
    <div class="crop">
        <div class="box-signin">
            <form action="home.php" method="post">
                <h1>Login</h1>
                <span>Username</span>
                <div class="username-input">
                    <div class="username-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="username-label">
                        <input type="text" placeholder="type your username">
                    </div>
                </div>
                <span>Password</span>

                <div class="password-input">
                    <div class="password-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="password-label">
                        <input type="text" placeholder="type your password">
                    </div>
                </div>
                <div class="forgot">
                    <a href="forgotPassword.php">Forgot Password</a>
                </div>

                <div class="btn-login">
                    <button>Login</button>
                </div>
                <div class="sign-up">
                    <a href="signUp.php">Or Sign Up</a>
                </div>
        </div>
        </form>
    </div>

</body>

</html>