<?php
require_once 'connection.php';
if($_POST['submit'])
{
    $uid = $_REQUEST["name"]; 
    $password = $_REQUEST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE uid = '$uid'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($password == $row[2])
        {
            $_SESSION['id'] = $row[0];
            $_SESSION['name'] = $row[1];
            header("location:../dashboard.php");
        }
    else
        {
            echo "<script>  alert('Password not Matched') </script>";
            echo "<script> location.href = '../login.php' </script>";
        }
    
}


?>