<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/waveform.js"></script>
    <link rel="stylesheet" href="../css/success.css">
    <title>Access</title>
</head>
<body>
    <?php
        include('../connection/connectiondb.php');
        $idSuccess = $_GET["id"];
        $selectQuery = 'SELECT * FROM user_attendance  WHERE user_Id =' . $idSuccess;
        $selectExecute = $con->query($selectQuery);
        $row = $selectExecute->fetch_assoc();
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
        <h1>Thank You for Coming...!</h1>
        <form action="../query/queryLeave.php" method="post">
            <input type="number" name="txtid" value='
            <?php  echo $row["user_Id"] ?>
            '>
            <button name="txtLeave">leave</button>
        </form>
    </div>
</body>
<script>
    const main =document.querySelector(".main");
    setInterval(()=>{
        main.style.display = 'none';
    },3000);
</script>
</html>