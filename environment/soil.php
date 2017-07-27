<!DOCTYPE html>

<?php
include('translate.php');
include('connect.php');
?>
<html>
    <head>
        <title>Soil Analyzer</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    
  


<body>
 <nav class="navbar navbar-inverse " style="border-radius:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Digitization Farming</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Home</a></li>
    </ul>
  </div>
</nav>

  
  <form  method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
   <div class="container">
       <table class="table table-inverse ">
  
  <tbody>
    <tr>
      <td>Enter pH Value:</td>
      <td><input type=number name="ph" step="0.1" id="ph"></td>
      
    </tr>
    <tr>
        
        
    </tr>
   
    <tr>
        <td></td>
      <td><input type="submit" value="Calculate" name="submit"  class="btn btn-primary"></td>
    </tr>
           </tbody>
       </table>
       
   
       
             
       
      </div>
    </form> 
    
      
      <div class="row-fluid">
      <div class="col-lg-6">
      <div class="table-responsive">
       
           <table class='table table-inverse'>
        <tr>
        <td><a href="../shop/shop.php#others1">
       <img src='images/ph.jpg'  alt='ph Finder' width='304' height='236'>
            </a></td>
        </tr>
    </table> 
          </div></div>
      
        
          
            
              
                
                  
                      
    <?php
     
      if(isset($_POST['submit']))
      {
        $ph=$_POST['ph']; 
        $query="select * from ph where ph_val='$ph'";
        $run=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($run);
          $i=0;
                     $crops_array=$row["crops"];
              $fert_array=$row["nutrients"];
              $crops=explode(",",$crops_array);
              $fert=explode(",",$fert_array);
              
             
          echo "
              
                 
           <div class='col-lg-6'>
      <div class='table-responsive'>      
   
       <table class='table table-inverse' >
  <thead>
    <tr>
      <th>CROPS</th>
    </tr>
  </thead>
  <tbody>
    ";
    foreach($crops as $cell){ echo "<tr><td>".$cell."</td></tr>";}
  echo   "</tbody>
            </table>
            </div></div>
            
            
            <div class='col-lg-6'>
      <div class='table-responsive'>
        <table class='table table-inverse' >
  <thead>
    <tr>
      <th>Fertilizers</th>
    </tr>
  </thead>
  <tbody>
    ";
    foreach($fert as $cell){ echo "<tr><td>".$cell."</td></tr>";}
  echo   "</tbody>
            </table></div></div>
            
         ";
              
              
          
          
        
      }
    
      ?>

   

    
    </div>
    
    
    
</body>