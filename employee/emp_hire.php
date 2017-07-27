<?php
include('connect.php');
include('translate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HIRE ME!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

<div class="container">
  <form method="get">
  <table class="table">
      <thead style="background-color:black;color:white;">
      <tr><th>ID</th><th>Name</th><th>Age</th><th>Contact</th><th>Skills</th><th>Salary Expected</th><th>Hire</th></tr>
      </thead>
      
      <?php
      
      $query1="select * from employee_reg";
      $run1=mysqli_query($connect,$query1);
      while($row=mysqli_fetch_assoc($run1))
      {     $id=$row["id"];
          $name=$row["name"];
          $age=$row["age"];
          $contact=$row["contact"];
          $skills=$row["skills"];
          $skills=explode(",",$skills);
          $salary=$row["salary"];
          
          echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$contact</td><td>";
          foreach($skills as $cell){echo "<table><tr><td>$cell</td></tr></table>";}
          echo "</td><td>$salary</td><td><a href='emp_hire.php?id=$id'><button type='button' class='btn btn-primary'>HIRE</button></a></td></tr>";
      }
      
      
      ?>
      
      
      
      
      
  </table>
    </form>
  
</div>




<?php
    if(isset($_GET['id']))
    {
        $id1=$_GET['id'];
        $querym="select * from employee_reg where id='$id1'";
        $runm=mysqli_query($connect,$querym);
        $rowm=mysqli_fetch_assoc($runm);
        $name=$row["name"];
          $age=$row["age"];
          $contact=$row["contact"];
          $skills=$row["skills"];
          $skills=explode(",",$skills);
          $salary=$row["salary"];
        
        echo "<script>var a=prompt('Please Enter Your Contact Number.This number will be send to the employee so both can chat simlutaneously:');alert('Details are sent. User can will call you on '+ a);</script>";
        
        
        
        
        
        
        
        
        
        
        
        
    }
?>


</body>
</html>