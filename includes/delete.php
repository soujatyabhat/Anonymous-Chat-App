<?php
require_once 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM message WHERE mid = '$id'";


$result = mysqli_query($con,$sql);
if($result)
    {
        header("location:../display.php");
    }
else
    {
        echo "Errror!!";
    }
?>