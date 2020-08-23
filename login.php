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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Anonymous Talking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php"> Create Account <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="login.php">Login</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
    </div>
  </div>
</nav>
<main role = "main" class = "container-fluid">
<center>
    <div class = "card" style = "width:300px;margin-top:30px;background-color:silver;">
        <div class = "card-body">
            <div class = "form-group">
                <form action = "includes/LoginData.php" method = "POST" enctype="multipart/form-data" >
                    <div class = "form-group">
                    <p class = "text-left"> User ID : </p>
                             <input type = "text" name = "name" id = "name" class = "form-control" required>
                    </div>
                    <div class = "form-group">
                    <p class = "text-left"> Password : </p>
                             <input type = "password" name = "password" id = "password" class = "form-control" required>
                    </div>
                    <div class = "form-group">
                             <input type = "submit" name = "submit" class = "btn btn-success col-12">
                             <br>
                             <br>
                             <input type = "reset" class = "btn btn-danger col-12">
                    </div>
                 </form>
            </div>
        </div>
</center>
</main>
<br> <br> <br> <br> <br> <br>
<footer class="footer">
      <div class="container-fluid bg-dark text-right" style = "padding:20px">
        <span class="text-white"> <i> Developed By : Soujatya Bhattacharya </i> </span>
      </div>
</footer>
</body>
</html>