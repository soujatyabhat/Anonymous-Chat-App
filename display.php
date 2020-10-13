<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/style.css">
    <?php
    require_once 'includes/connection.php';
    if(!isset($_SESSION['id']))
    {
        header("location:login.php");
    }
    ?>
    <style>
         body
         {
             background-color:maroon;
             background-size: cover;
         }
    </style>
</head>
<body>
<a href = "dashboard.php"> <img src = "images/backward-solid.png" width = "30px" height = "30px" title = "Logout"/> </a>
    <main role = "main" class = "container">
    <br>
    <?php
         $uid = $_SESSION["id"];
         $sql = "SELECT * FROM message WHERE uid = '$uid' ORDER BY date DESC";
         $result = mysqli_query($con,$sql);
         while($row = mysqli_fetch_array($result))
         {
    ?>
        <div class = "container" style = "background-color:#ffffb3;color:black; padding:40px; border:5px ridge silver; border-radius:20px;">
                <caption> <b> Date : <?php echo $row[2] ?> </cation> </b>
                <p style = "text-align:justify"> <strong> Message : </strong> <?php echo $row[1] ?> </p>
                <a href = "includes/delete.php?id=<?php echo $row[3]?>" class = "btn btn-danger"> Delete </a>
        </div>
        <br>
    <?php 
         }
    ?>
    </main>
</body>
</html>