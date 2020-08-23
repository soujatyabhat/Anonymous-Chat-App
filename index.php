<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Accout</title>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script type = "text/javascript"> 
        $(document).ready(function(){
            $("#submit").click(function(even){
              var pass = document.getElementById("pass").value;
              var c_pass = document.getElementById("c_pass").value;
              if(pass === c_pass)
              {
                $.ajax({
                    url: 'includes/registration.php',
                    method : 'post',
                    data : $('form').serialize(),
                    success: function(data){
                      alert(data);
                      location.href = "login.php";
                    }
                })
              }
                else
                {
                    alert("Invalid Password!!");
                }
            })
        })
    </script>
    
    <link rel="stylesheet" href="style/style.css">
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
<main role = "main" class = "container">
        <br>
<center>
<div class = "card" style = "width:500px;margin-top:30px;background-color:silver;">
        <div class = "card-body">
        <form method = "POST" class = "form">
            <br>
            <div class = "form-group">
            <p class = "text-left"> Name : </p>
                    <input type = "name" name = "uname" placeholder = "Name" id = "name" class = "form-control"  requied>
            </div>
            <div class = "form-group">
            <p class = "text-left"> Uid : </p>
                    <input type = "name" name = "uid" id = "uid" placeholder = "User Id" onblur = "alphanumeric()" title = "Set UserId as a 8 alphanumerical format" class = "form-control" maxlength = "8" requied>
            </div>
            <p class = "text-left"> Password: </p>
            <div class = "form-group">
                    <input type = "password" name = "password" placeholder = "Password" id = "pass" class = "form-control" minlength = "8" requied>
            </div>
            <p class = "text-left"> Confirm Password : </p>
            <div class = "form-group">
                    <input type = "password" name = "c_password" placeholder = "Confirm Password" id = "c_pass" class = "form-control" minlength = "8" requied>
            </div>
            <div class = "form-group">
                    <input type = "submit" name = "submit" id = "submit" class = "btn btn-success">
                    <input type = "reset" name = "Reset" class = "btn btn-danger">
            </div>
        </form>
    </fieldset>
</center>
</main>
<br> <br> 
<footer class="footer">
      <div class="container-fluid bg-dark text-right" style = "padding:20px">
        <span class="text-white"> <i> Developed By : Soujatya Bhattacharya </i> </span>
      </div>
</footer>
</body>
</html>