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

     <link rel="stylesheet" href="style/style.css">
</head>
<body class="pic">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0.6);">
  <a class="navbar-brand" href="#" style="color: #ffffff;">Anonymous Talking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php" style="color: #ffffff;"> Create Account <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="login.php" style="color: #ffffff;">Login</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
    </div>
  </div>
</nav>
<main role = "main" class = "container-fluid">
<center>
    <div class = "card" style = "width:300px;margin-top:30px;background-image: linear-gradient(to top,#fff033,#33beff 50%);">
        <div class = "card-body">
            <div class = "form-group">
                <form action = "includes/LoginData.php" method = "POST" enctype="multipart/form-data" >
                    <div class = "form-group">
                    <p class = "text-left user"> User ID : </p>
                             <input type = "text" name = "name" id = "name" class = "form-control" required>
                    </div>
                    <div class = "form-group">
                    <p class = "text-left user"> Password : </p>
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
</body>
</html>