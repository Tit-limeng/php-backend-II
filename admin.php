<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>dashboard admin</title>
</head>

<body>
   <?php
   include('./connection/connectiondb.php');

   $data = 'SELECT * FROM user_attendance';

   $exe = $con->query($data);
   ?>
   <h1 class="text-center text-primary" data-aos="fade-up">Attendence List</h1>
   <div class="d-flex">
      <a href="signUp.php"><button class="btn btn-secondary">Create</button></a>
   </div>
   <table class="table table-striped w-100">
      <thead>
         <tr>
            <th scope="col">UserID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">DateOfBirth</th>
            <th scope="col">Create_Date</th>
            <th scope="col">Start_Date</th>
            <th scope="col">End_Date</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody data-aos="fade-up">
         <?php
         while ($rows = $exe->fetch_assoc()) {
         ?>
            <tr >
               <td class="py-3">
                  <?php
                  echo $rows["user_Id"]
                  ?>
               </td>
               <td class="py-3">
                  <?php
                  echo $rows["firstName"]
                  ?>
               </td>
               <td class="py-3">
                  <?php
                  echo $rows["lastName"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["email"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["password"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["dob"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["date"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["start_date"]
                  ?>
               </td>
               <td class="py-3">

                  <?php
                  echo $rows["end_date"]
                  ?>
               </td>
               <td>
                  <div class="d-flex justify-content-center gap-3">
                     <a href="edit.php?id='<?php echo $rows["user_Id"]?>'">
                     <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                     </a>
                     <a href="./query/queryDelete.php?id='<?php echo $rows["user_Id"]?>'" onclick="return confirm('Do You Want to Delete ?')">
                     <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                     </a>
                  </div>
               </td>
            </tr>
         <?php
         }
         ?>
      </tbody>
   </table>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>