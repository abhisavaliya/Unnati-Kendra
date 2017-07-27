<?php

include('connect.php');
include("donate_get.php");


?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Personal Donation Details</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <style>
        table{
            border:2px solid black;
            width: 100%;
        }
        
        td,tr{
            border:1px solid black;
        }
        
        </style>

    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="index.php">Digitization Farming</a>
                    <?php include("translate.php");?>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="personal.php">Personal Donations Request</a></li>
                    <li><a href="donate.php">Donate</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="container">
                    <table class="table table-inverse ">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="village">Select Village:</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control" name="village">
                                        <option value="" active>--SELECT VILLAGE--</option>
                                        <?php echo $options; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Calculate" name="submit" class="btn btn-primary"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        
        <?php       
               
            if(isset($_POST["submit"])) 
            {
                
            $vill=$_POST["village"];    
                
            echo "<button type='button' class='form-control btn-primary'>$vill</button><br>";
                
           echo "<table class='table'>
                <thead style='background-color:#0072BB;color:white;'>
                    <tr>
                        <th colspan='2'>Medical</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Reasons</th>
                        <th>Total Required</th>
                        <th>Currently CAN BE Donated</th>
                    </tr>
                </thead>";
            
         
         $query1="select * from req_donate where required='medication' AND village='$vill'";
         $query2="select medical from villages where name='$vill'";
         
         $run1=mysqli_query($connect,$query1);
         
         $run2=mysqli_query($connect,$query2);
         $row2=mysqli_fetch_assoc($run2);
         $avail=$row2["medical"];
         
         
         $amount=0;
         while($row1=mysqli_fetch_assoc($run1))
         {
             $amount=$amount+$row1["amount"];
             
         }
         
        $run1=mysqli_query($connect,$query1);
         while($row1=mysqli_fetch_assoc($run1))
         {
         
            $name=$row1["name"];
            $reasons=$row1["question"];
             $totalreq=$row1["amount"];
             $donatable=0;
             
             if($amount>=$avail){
                $donatable=($totalreq*$avail)/$amount;
             }
             
             else {
                 echo $totalreq;
                 $donatable=$totalreq;
             }
             
             
             
        
         echo "<tr><th>$name</th><th>$reasons</th><th>$totalreq</th><th>$donatable</th></tr>";
         }
        
         
       
       echo "</table>";
         
                
                
                
                
        echo "<table class='table'>
                <thead style='background-color:#FF4C3B;color:white;'>
                    <tr>
                        <th colspan='2'>Education</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Reasons</th>
                        <th>Total Required</th>
                        <th>Currently CAN BE Donated</th>
                    </tr>
                </thead>";
            
         
         $query1="select * from req_donate where required='education' AND village='$vill'";
         $query2="select education from villages where name='$vill'";
         
         $run1=mysqli_query($connect,$query1);
         
         $run2=mysqli_query($connect,$query2);
         $row2=mysqli_fetch_assoc($run2);
         $avail=$row2["education"];
         
         
         $amount=0;
         while($row1=mysqli_fetch_assoc($run1))
         {
             $amount=$amount+$row1["amount"];
             
         }
         
        $run1=mysqli_query($connect,$query1);
         while($row1=mysqli_fetch_assoc($run1))
         {
         
            $name=$row1["name"];
            $reasons=$row1["question"];
             $totalreq=$row1["amount"];
             $donatable=0;
             
             if($amount>=$avail){
                $donatable=($totalreq*$avail)/$amount;
                 
             }
             
             else {
                 $donatable=$totalreq;
             }
             
             
             
        
         echo "<tr><th>$name</th><th>$reasons</th><th>$totalreq</th><th>$donatable</th></tr>";
         }
        
         
       
       echo "</table>";
         
                
                
                
                
                
                
                
                
                
                
                
                echo "<table class='table'>
                <thead style='background-color:#FFD034;color:white;'>
                    <tr>
                        <th colspan='2'>Natural Calamities</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Reasons</th>
                        <th>Total Required</th>
                        <th>Currently CAN BE Donated</th>
                    </tr>
                </thead>";
            
         
         $query1="select * from req_donate where required='nc' AND village='$vill'";
         $query2="select naturalc from villages where name='$vill'";
         
         $run1=mysqli_query($connect,$query1);
         
         $run2=mysqli_query($connect,$query2);
         $row2=mysqli_fetch_assoc($run2);
         $avail=$row2["naturalc"];
         
         
         $amount=0;
         while($row1=mysqli_fetch_assoc($run1))
         {
             $amount=$amount+$row1["amount"];
             
         }
         
        $run1=mysqli_query($connect,$query1);
         while($row1=mysqli_fetch_assoc($run1))
         {
         
            $name=$row1["name"];
            $reasons=$row1["question"];
             $totalreq=$row1["amount"];
             $donatable=0;
             
             if($amount>=$avail){
                $donatable=($totalreq*$avail)/$amount;
             }
             
             else {
                 $donatable=$totalreq;
             }
             
             
             
        
         echo "<tr><th>$name</th><th>$reasons</th><th>$totalreq</th><th>$donatable</th></tr>";
         }
        
         
       
       echo "</table>";
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                echo "<table class='table'>
                <thead style='background-color:rgba(0,0,0,0.5);color:white;'>
                    <tr>
                        <th colspan='2'>Farming</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Reasons</th>
                        <th>Total Required</th>
                        <th>Currently CAN BE Donated</th>
                    </tr>
                </thead>";
            
         
         $query1="select * from req_donate where required='farming' AND village='$vill'";
         $query2="select farming from villages where name='$vill'";
         
         $run1=mysqli_query($connect,$query1);
         
         $run2=mysqli_query($connect,$query2);
         $row2=mysqli_fetch_assoc($run2);
         $avail=$row2["farming"];
         
         
         $amount=0;
         while($row1=mysqli_fetch_assoc($run1))
         {
             $amount=$amount+$row1["amount"];
             
         }
         
        $run1=mysqli_query($connect,$query1);
         while($row1=mysqli_fetch_assoc($run1))
         {
         
            $name=$row1["name"];
            $reasons=$row1["question"];
             $totalreq=$row1["amount"];
             $donatable=0;
             
             if($amount>=$avail){
                $donatable=($totalreq*$avail)/$amount;
             }
             
             else {
                 $donatable=$totalreq;
             }
             
             
             
        
         echo "<tr><th>$name</th><th>$reasons</th><th>$totalreq</th><th>$donatable</th></tr>";
         }
        
         
       
       echo "</table>";
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            }
     ?>
    </div>
    </body>

    </html>