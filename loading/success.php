<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/waveform.js"></script>
    <link rel="stylesheet" href="../css/Success.css">
    <title>Access</title>
</head>
<body>
    <?php
    include('../Attendance.php');
    $conn = new Attendance();
    $conn->connection();
    $id = $_GET["id"];
    $getUserName = "SELECT * FROM user_attendance WHERE user_Id= $id ";
    $executeGetUs = mysqli_query($conn->connection(),$getUserName);
    $item = $executeGetUs -> fetch_assoc();
    ?>
    <div class="main">
<l-waveform
  size="70"
  stroke="4.5"
  speed="1"
  color="#00008B" 
></l-waveform>
    </div>

    <div class="message">
        <div class="header-text">
        <h1>Thank You for Coming...!</h1>
            <p><?php echo $item["user_Id"].':'. $item["firstName"].' '.$item["lastName"]?></p>
        </div>
    </div>
</body>
<script>
    const message =document.querySelector(".message");
    const main =document.querySelector(".main");
    setInterval(()=>{
        main.style.display = 'none';
    },2000);
    setInterval(() => {
        window.location.replace('../signIn.php');
    }, 3000);
</script>
</html>