<?php
include('translate.php');
include('connect.php');
include("donate_get.php");
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Donations' Sign Up Form</title>
        
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="personal_main.php" method="post">
      
          <h1>Personal Donations' Sign Up</h1><hr><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="number" id="aadhar" name="aadhar">
                          
          <label for="phone">Contact:</label>
          <input type="number" id="phone" name="phone">
          
          <label for="village">Select Village:</label>
                        <br>
                        <select class="form-control" name="village">
                            <option value="" active>--SELECT VILLAGE--</option>
                            <?php echo $options; ?>
                        </select>
          
          <label for="question">Enter Reason:</label>
          <input type="text" id="question" name="question">
          
          <label for="required">Required For:</label>
          <input type="radio" id='Education' value='Education' name="req"><label for="'Education'" class="light">Education</label><br>
          <input type="radio" id="Naturabl_Calamities" value="nc" name="req"><label for="Naturabl_Calamities" class="light">Naturabl Calamities</label><br>
          <input type="radio" id="Medication" value="Medication" name="req"><label for="Medication" class="light">Medication</label><br>
          <input type="radio" id="Farming" value="Farming" name="req"><label for="Farming" class="light">Farming</label><br>
          
            <label for="amount">Amount:</label>
          <input type="number" id="amount" name="amount">
             
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>