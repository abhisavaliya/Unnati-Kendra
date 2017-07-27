<?php
include('translate.php');
include('connect.php');
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmer Sign Up Form</title>
        
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="farmer_reg_main.php" method="post">
      
          <h1>Farmer's Sign Up</h1><hr><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="number" id="aadhar" name="aadhar">
                          
          <label for="phone">Contact:</label>
          <input type="number" id="phone" name="phone">
          
          <label for="area">Total Land(in acres):</label>
          <input type="number" id="area" name="area">
          
          <label for="village">Village:</label>
          <input type="text" id="village" name="village">
          
          
          
          <label>Skills:</label>
          <input type="checkbox" id="farming" value="Farming" name="farming"><label for="farming" class="light">Farming</label><br>
          <input type="checkbox" id="handlooming" value="Handloom" name="handlooming"><label for="handlooming" class="light">Handloom</label><br>
          <input type="checkbox" id="mechanic" value="Mechanic" name="mechanic"><label for="mechanic" class="light">Mechanic</label><br>
            <label for="others" class="light">Others:</label><br>  <input type="text" id="others" name="others">
            
        
         
             
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>