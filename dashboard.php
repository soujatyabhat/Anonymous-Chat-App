<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    function delac()
    {
        a = confirm("Do you want to delete my account?");
        if (a == true)
            return true;
        else
            return false;
    }
    </script>
    <?php 
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:login.php");
    }
    $id = $_SESSION['id'];
    $body = "*Hey!! Do You want write something about me anonymously? Checkout the link Bellow* %0D%0A"; 
    $url = $body."http://1401de3b5b42.ngrok.io/dashboard/message.php?id=$id";
    ?>
</head>
<body>
    <div class = "jumbotron bg-dark text-white">
        <h1> Welcome to Anonymous Talking </h1>   
            <a href = "includes/logout.php"  style = "float:right;"> <img src = "images/power-off-solid.png" width = "30px" height = "30px" title = "Logout"/> </a>
    </div>
    <p> Your Name :  <?php echo  $_SESSION['name'] ?> </p>
    <main role = "main" class = "container">
    <br>

        <center>
            <button class = "btn btn-primary col-lg-3 col-md-3 col-sm-3 col-3" style ="height:100px" onclick = "cpy()"> Share Link  </button>
            <a href = "display.php" style = "text-decoration:none;"> <button class = "btn btn-success col-lg-3 col-md-3 col-sm-3 col-3" style ="height:100px"> Message  </button> </a>
        </center>
        </form>
    </main>
<footer class="footer" style = "margin-top:200px;">
      <div class="container-fluid bg-dark text-right" style = "padding:20px">
        <span class="text-white"> <i> Developed By : Soujatya Bhattacharya </i> </span>
      </div>
</footer>
</body>
</html>