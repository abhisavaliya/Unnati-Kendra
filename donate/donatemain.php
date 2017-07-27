<?php

include('connect.php');

$name=$_POST['village'];
$amount=$_POST['amount'];

        
$med=0.2*$amount;
$edu=0.25*$amount;
$natc=0.2*$amount;
$farm=0.35*$amount;
        


$query="UPDATE villages  SET amount=amount+'$amount', medical=medical+'$med',  education=education+'$edu', naturalc=naturalc+'$natc', farming=farming+'$farm'   where name='$name'";

$run=mysqli_query($connect,$query);

if($run)
{
    echo "<script>alert('Thanx for your valuable RS. $amount Donations to $name.');location.href='donate.php'</script>";
}
else echo "PROBLEM";


?>

