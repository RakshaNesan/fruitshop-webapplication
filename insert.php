<?php
include "db.php";
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$password=$_POST["password"];
$sql="INSERT INTO user(`name`,`gender`,`email`,`password`) VALUES ('$name','$gender','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:signin.php");
}
else{
    echo "error";
}
?>
