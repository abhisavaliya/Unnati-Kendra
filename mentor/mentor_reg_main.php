<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$village=$_POST["village"];
$skills="";

if(isset($_POST["hindi"]))
    $skills=$skills.",".$_POST["hindi"];

if(isset($_POST["english"]))
    $skills=$skills.",".$_POST["english"];

$skills1=$_POST["others"];
    $skills=$skills.",".$skills1;

$skills=ltrim($skills,",");

$ed=$_POST["edu"];




$query1="select * from mentor_reg where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `mentor_reg`( `name`, `aadhar`, `phone`, `village`, `cs`, `ed`) VALUES ('$name','$aadhar','$phone','$village','$skills','$ed')";


if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('Mentor $name Successful Registrated!');location.href='mentor_reg.php';</script>";
}
}

else echo "<script>alert('Mentor $name Already Registrated!');location.href='mentor_reg.php';</script>";



?>