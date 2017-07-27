<!DOCTYPE html>

<?php

include('connect.php');
?>
<html>
    <head>
        <title>Total Donations</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

     </head>
    
    <style>
    
        tr,th{
            text-align: center;
        }
    
    </style>
    
<body>
    
 <nav class="navbar navbar-inverse " style="border-radius:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Digitization Farming</a>
      <?php include('translate.php');?>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Home</a></li>
    </ul>
  </div>
</nav>

   <div class="container">

       
            
    <table class="table" >
      <thead style="background-color:black;color:white;">
      <tr><th>ID</th><th>Name</th><th>Account No.</th><th>Total Donations</th><th>Medications</th><th>Natural Calamities</th><th>Farming</th><th>Education</th></tr>
      </thead>
      
      <?php
      
      $query1="select * from villages";
      $run1=mysqli_query($connect,$query1);
      while($row=mysqli_fetch_assoc($run1))
      {     $id=$row["id"];
          $name=$row["name"];
          $acc=$row["accno"];
          $amount=$row["amount"];
       $med=$row["medical"];
       $natc=$row["naturalc"];
       $farm=$row["farming"];
       $education=$row["education"];
          
          echo "<tr><td>$id</td><td>$name</td><td>$acc</td><td>$amount</td><td>$med</td><td>$natc</td><td>$farm</td><td>$education</td></tr>";
                }
      
      
      ?>
      
      
      
      
      
  </table>          
                     
                            
                                   
                                          
                                                 
                                                        
                                                                      
   </div>
   
   

    
</body>   
    
</html>