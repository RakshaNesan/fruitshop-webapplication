<?php
include "db.php";
if(isset($_GET['id'])){
    $fid=$_GET['id'];
    $sql="DELETE FROM fruit WHERE fid='$fid'";
    $result = $con->query($sql);
    if($result == TRUE)
{
    echo "Record deleted successfully";
    ?> 
   
    <?php
}
else{
echo "Error:".$sql."<br>".$con->error;
}
}
?>