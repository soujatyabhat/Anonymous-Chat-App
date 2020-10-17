<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type = text/javascript>
    </script>

    <?php 
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:login.php");
    }

    if(isset($_REQUEST['share']))
    {
        $id = $_SESSION['id'];
        $url = "http://127.0.0.1/dashboard/Anonymous-Chat-App/message.php?id=$id";
        echo "<script> alert('Copy link : $url') </script>";
    }
    ?>
    <link rel="stylesheet" href="style/style.css">

</head>
<body class="back2"style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRh4xjlqyJw0D3nJ3Br4-CwNCvuFeHL_RUQpw&usqp=CAU); background-size: contain;">
    <div class = "jumbotron " style = "background-color:rgba(0,0,0,0.6);">
        <h1 style="color: #ffffff;"> Welcome to Anonymous Talking </h1>   
            <a href = "includes/logout.php"  style = "float:right; background-color:transparent;"> <img src = "images/power-off-solid.png" width = "30px" height = "30px" title = "logout"/> </a>
    </div>
    <p style="font-size: 25px; font-weight: bold; color: #ff0000;"> Your Name :  <?php echo  $_SESSION['name'] ?> </p>
    <main role = "main" class = "container">
    <br>

        <center>
        <form>
            <button type = "submit" class = "btn btn-primary col-lg-3 col-md-3 col-sm-3 col-3 abc" style ="height:100px" name = "share"> Share Link  </button>

             <button class = "btn btn-warning col-lg-3 col-md-3 col-sm-3 col-3 bcd" style ="height:100px"> <a href = "display.php" style = "text-decoration:none;"> Message </a> </button> 
        </center>
        </form>
    </main>
</body>
</html>