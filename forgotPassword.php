<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Forgot Password</title>
</head>
<body>
    <h1 class="text-center my-5">Forgot Password</h1>
    <form action="" class="my-5 gap-3">
        <br>
        <div class="w-50 mx-auto justify-content-center">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">User Id :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Enter your ID">
                </div>
            </div>
        </div>
        <br>
        <div class=" w-50 mx-auto justify-content-center">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="colFormLabel" placeholder="Enter your password">
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center" style="margin-left:600px">
            <a href="signUp.php">
                <input class="btn btn-link" type="button" value="Sign Up">
            </a>
        </div>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <input type="button" value="Submit" class="btn btn-primary">
        </div>
    </form>
</body>

</html>