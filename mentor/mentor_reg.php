<?php
include('translate.php');
include('connect.php');
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mentor Sign Up Form</title>
        
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="mentor_reg_main.php" method="post">
      
          <h1>Mentor's Sign Up</h1><hr><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="text" id="aadhar" name="aadhar">
                          
          <label for="phone">Contact:</label>
          <input type="number" id="phone" name="phone">
          
          <label for="village">Village/City:</label>
          <input type="text" id="village" name="village">
          
          
          
          <label>Communication Skills:</label>
          <input type="checkbox" id="hindi" value="Hindi" name="hindi"><label for="hindi" class="light">Hindi</label><br>
          <input type="checkbox" id="english" value="English" name="english"><label for="english" class="light">English</label><br>
          <label for="others" class="light">Others:</label><br>  <input type="text" id="others" name="others"><br>
           
         
           <label>Educational Details:</label>
           <input type="radio" id="12" value="12th" name="edu"><label for="12" class="light">12th</label><br>
           <input type="radio" id="graduated" value="Graduated" name="edu"><label for="graduated" class="light">Graduated</label><br>
            
        
         
             
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>