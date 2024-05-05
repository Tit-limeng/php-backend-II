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
    <h1 class="text-center my-5"​ data-aos="fade-up">Forgot Password</h1>
    <form action="" class="my-5 gap-3">
        <br>
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1100" >
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">User Id :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Enter your ID">
                </div>
            </div>
        </div>
        <br>
        <div class=" w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1200">
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
                <input class="btn btn-link" type="button" value="Sign Up" data-aos="flip-up" data-aos-duration="1300">
            </a>
        </div>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <input data-aos="zoom-in-up" type="button" value="Submit" class="btn btn-primary">
        </div>
    </form>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>