<?php
include "db.php";

if(isset($_POST['update'])){
   

    $fid=$_POST['fid'];
 //   $name=$_POST['name'];
  //  $weight=$_POST['weight'];
  //  $price=$_POST['price'];

    $sql = "UPDATE fruit SET name='$name', weight='$weight', price='$price' WHERE fid='$fid' ";
    $result=$con->query($sql);

if($result == True){
    echo "Record updated successfully";
}
else{
echo "Error:".$sql."<br>".$con->error;
}

}


if(isset($_GET['id'])){
$fid=$_GET['id'];

$sql="SELECT * FROM fruit WHERE fid='$fid'";
$result=$con->query($sql);

if($result->num_rows> 0 ){
      while($row= $result->fetch_assoc()){
        $name=$row['name'];
        $weight=$row['weight'];
        $price=$row['price'];
        $fid=$row['fid'];

      }
      ?>

      <div class="text-center mb-4">
        <h1>Update</h1>
      </div>

      <div class="container">
    <form class="form-control" action="edit.php" method="post">
        <div class="row">
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" value="<?php echo $name;?>">
            </div>
            <input type="hidden" name="fid" value="<?php echo $fid;?>">
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="weight" value="<?php echo $weight;?>">
            </div>

            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="price" value="<?php echo $price;?>">
            </div>

            <div class="col mr-2">
        <input class="btn btn-primary" type="submit" name="update" value="update">
            </div>
        </div>
        <a href="signin.php">home</a>
    </form>
</div>
<?php
}

}
else{
    header('location:signin.php');
}



?>