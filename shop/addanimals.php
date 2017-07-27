<?php

include ('connect.php');

$image=$_POST['image'];
$name=$_POST['name'];
$price=$_POST['price'];


$query="INSERT INTO `animals` (`image`, `name`, `price`) VALUES ('$image','$name','$price')";

$run=mysqli_query($connect,$query);
if($run)
    header('location:sell_main.php');

?>