<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$area=$_POST["area"];
$village=$_POST["village"];
$skills="";

if(isset($_POST["farming"]))
    $skills=$skills.",".$_POST["farming"];

if(isset($_POST["handlooming"]))
    $skills=$skills.",".$_POST["handlooming"];
   
if(isset($_POST["mechanic"]))
    $skills=$skills.",".$_POST["mechanic"];

$skills1=$_POST["others"];
    $skills=$skills.",".$skills1;

$skills=ltrim($skills,",");




$query1="select * from farmer_reg where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `farmer_reg`( `name`, `aadhar`, `phone`, `area`, `village`, `skills`) VALUES ('$name','$aadhar','$phone','$area','$village','$skills')";


if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('Farmer $name Successful Registrated!');location.href='farmer_reg.php';</script>";
}
}

else echo "<script>alert('Farmer $name Already Registrated!');location.href='farmer_reg.php';</script>";



?>