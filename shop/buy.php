<?php
include ('connect.php');

$price=$_POST['price'];

$name=ucwords($_POST['name']);

$to = "Farmer";
$subject = "From DIGITIZATION FARM: Purchased $name!!";
$txt = "Dear Farmer,Your Just purchased $name for $price! It ll be delivered to your address soon!";
$headers = "From:DIGI FARM";

mail($to,$subject,$txt,$headers);
    
 
    echo "<script>alert('You Bought For ".$price."');location.href='shop.php';</script>";



?>