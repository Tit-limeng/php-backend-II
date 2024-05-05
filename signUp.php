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
    <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" class="text-center my-4">Sign Up Account</h1>
    <form action="" class="my-4">
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up"  data-aos-duration="1100">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">First Name :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                </div>
            </div>
        </div>
        <div class=" w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1200">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Lase Name :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                </div>
            </div>
        </div>



        <div class="w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1300">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                </div>
            </div>
        </div>
        <div class="w-50 mx-auto justify-content-center"  data-aos="fade-up" data-aos-duration="1400">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                </div>
            </div>
        </div>

        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">DOB :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="" auto-complete="off">
                </div>
            </div>
        </div>
        <br>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <input  data-aos="zoom-in-up" type="button" value="Create Account" class="btn btn-primary">
        </div>
        <br>
        <div class="d-flex container align-items-center">
            <a href="signIn.php">
            <input class="btn btn-dark"  data-aos="fade-right" style="margin-left: 230px;" type="button" value="Back">
            </a>
        </div>
    </form>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>