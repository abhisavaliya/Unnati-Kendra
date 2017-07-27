<?php

include("connect.php");
include("translate.php");
?>




<!DOCTYPE html>


<html>
    <head>
        <title>Q/A</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
    </head>

<body class="jumbotron">
    
    
    <div class="navbar navbar-inverse " style="vertical-align:top;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " >Q/A</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">HOME</a></li>
    </ul>
  </div>
</div>
    
    
    <div class="container">
        
        
        <?php
        
        $query1="select * from questions";
        
        
        $run1=mysqli_query($connect,$query1);
        
        
        while($rows1=mysqli_fetch_array($run1))
        {
            $question=$rows1[1];
            $qid=$rows1[0];
            
            echo "<h1 style='display:inline;'><br>$qid.</h1><h1 style='display:inline'>$question</h1><hr style='border-bottom:2px solid black;width:100%'>";
            
            $query2="select * from answers";
            $run2=mysqli_query($connect,$query2);
            while($rows2=mysqli_fetch_row($run2))
            {
                $aid=$rows2[0]; 
        
                
                
                if($aid==$qid)
                {
                $answers=$rows2[1];
                echo "<h4 style='display:inline;padding:10px'><br>-</h4><h4 style='display:inline'>$answers</h4>";
                }
                
            }
            
            echo "<br>";
            echo "<form action='addans.php' method='post'>
                    <br>
                    <input class='form-control'  type=text name='answer' placeholder='Enter Answer!'>
                    <input type=hidden name='qid' value='$qid'><br>
                    <input type=submit class='btn-primary' name='SUBMIT ANSWER'>
                    </form>";
                
                
                
            }
        
        echo "<br><br><h1 style='display:inline'>Enter New Question:</h1>";
        echo "<form action='addquest.php' method='post'>
                    <input class='form-control' type=text name='question' placeholder='Enter Question!'><br>
                    <input type=submit  class='btn-primary' name='SUBMIT QUESTION'>
                    </form>";
        
        
        
        
        
        
        ?>
        
        
        
        
        
        
        
        
    </div>
    
    
    
    
</body>    
    
    
    
</html>