<?php
// Create Database Connection //
require_once 'connection.php';

$uid = mysqli_real_escape_string($con,$_POST['uid']);
$uname = mysqli_real_escape_string($con,$_POST['uname']);
$password = mysqli_real_escape_string($con,$_POST['c_password']);
if((strlen($uid) > 0) &&  (strlen($uname) > 0) && (strlen($password) > 0))
{
    $check = preg_match("/[1-9]|[A-B]/",$uid);
    if($check)
    {
         $sql1 = "SELECT * FROM user WHERE uid = '$uid'";
         $result = mysqli_query($con,$sql1);
         $count = mysqli_num_rows($result);
         if($count > 0)
             {
                echo "The account has already present";
                exit(0);
            }
         $upassword = md5($password);
         $sql = "INSERT INTO user (uid,uname,upassword) VALUES ('$uid','$uname','$upassword')";
         $save = mysqli_query($con,$sql);
        if($save)
            {
            echo "Account has Created!!";
            }
    }
    else
    {
        echo "Invalid User Name!!";
    }
}
else
{
    echo "Please fill all fields";
}
?>