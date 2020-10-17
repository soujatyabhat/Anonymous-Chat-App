<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Message </title>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script type = "text/javascript" src = "js/script.js">  </script>
    
    <link rel="stylesheet" href="style/style.css">
    <?php
      require_once 'includes/connection.php';
      $id = $_GET["id"];      
      $sql = "SELECT * FROM user WHERE uid = '$id'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
    ?>
    <?php
        if(isset($_REQUEST['submit']))
        {
            $message = $_REQUEST['msg'];
            $check = htmlspecialchars($message);
            date_default_timezone_set("Asia/Calcutta");
            $date = date("h:i:sa");
            $sql = "INSERT INTO message (uid,message,date) VALUES ('$id','$check','$date')";
            $result = mysqli_query($con,$sql);
            if($result)
            {
                echo "<script> alert('Message has send') </script>";
            }
        }
    ?>
</head>
<body style = "background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT8hU9GRIz_z64KvSyPphA1ly2NCqaMc0aQzw&usqp=CAU);">  
<nav class="navbar navbar-expand-lg"style="background-color: rgba(0,0,0,0.6);">
  <a class="navbar-brand" href="#" style="color: #ffffff;">Anonymous Talking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php" style="color: #ffffff;"> <b> Create Account </b> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="login.php" style="color: #ffffff;">Login</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
    </div>
  </div>
</nav>
<main role = "main" class = "container">
    <br>
    <h6 class = "display1" style = "font-style:italic;color:blue;"> Hey Dod!! Write something about <?php echo $row['uname'] ?> anonymously.....
        <form method = "POST" name = "message">
        <br>
            <div class = "form-group col-lg-12 col-md-12 col-sm-12 col-12">
                <textarea placeholder = "Write some comment" name = "msg" cols = "5" rows = "10" class = "form-control sdw"  maxlength = "500" id = "msg"> </textarea>
                <br>
               <span id="rchars">500</span> Character(s) Remaining <input type = "submit" name = "submit" value = "Submit" class = "btn btn-success" style = "float:right;">
               <br> <br>
            </div>
        </form>
</main>
</body>
</html>