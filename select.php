<?php 
session_start();
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from fruit where email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    header("location:home.php");
   $_SESSION["email"]=$email;
}
else{
   echo "error";
   header("location:signin.php");
}
?>