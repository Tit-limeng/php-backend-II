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

    <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" class="text-center my-2 ">Employee Info</h1>
    <form action="./query/queryInsert.php" class="my-4" method="post">
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1100">
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label flex">FirstName</label>

                <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" id="colFormLabel" placeholder="First Name">
                </div>
            </div>
        </div>
        <div class=" w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1200">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">LastName </label>
                <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" id="colFormLabel" placeholder="Last Name">
                </div>
            </div>
        </div>

        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1300">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" class="form-select" aria-label="Default select example">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1300">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="colFormLabel" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1400">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password </label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="colFormLabel" placeholder="Enter your Password">
                </div>
            </div>
        </div>

        <div class="w-50 mx-auto justify-content-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">DOB </label>
                <div class="col-sm-10">
                    <input type="text" name="dob" class="form-control" id="colFormLabel" auto-complete="off" placeholder="Date of Birth">
                </div>
            </div>
        </div>
        <br>
        <div class="w-[50] mx-auto  justify-content-center d-flex ">
            <button name="btncreate" data-aos="zoom-in-up" class="btn btn-primary">Crete Account</button>
        </div>
        <br>
        <div class="d-flex container align-items-center">
            <button class="btn btn-dark" style="margin-left: 230px;"><a href="admin.php">Back</a></button>

        </div>
    </form>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>