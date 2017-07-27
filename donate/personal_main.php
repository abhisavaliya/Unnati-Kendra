<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$question=$_POST["question"];
$req=$_POST["req"];
$village=$_POST["village"];
$amount=$_POST["amount"];





$query1="select * from req_donate where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `req_donate`( `aadhar`, `name`, `phone`,`village`, `question`, `required`, `amount`) VALUES ('$aadhar','$name','$phone','$village','$question','$req','$amount')";

if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('Personal Donation for $name Successful Registrated!');location.href='personal.php';</script>";
}
}

else echo "<script>alert('Personal Donation for $name Already Registrated!');location.href='personal.php';</script>";



?>