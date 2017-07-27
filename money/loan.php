<!DOCTYPE html>

<?php
include('translate.php');
?>
<html>
    <head>
        <title>LOAN CALCULATOR</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <script>
    function calc(){
var pamount=document.getElementById('loan').value;
var y=document.getElementById('years').value;
var ab=(pamount*6*y)/100;
var ib=(pamount*7*y)/100;
var boi=(pamount*6.5*y)/100;
var sbi=(pamount*6.8*y)/100;

var ab1=parseInt(pamount)+parseInt(ab);
var ib1=parseInt(pamount)+parseInt(ib);
var boi1=parseInt(pamount)+parseInt(boi);
var sbi1=parseInt(pamount)+parseInt(sbi);
        
   
    
document.getElementById("ab").innerHTML=ab;
document.getElementById("ib").innerHTML=ib;
document.getElementById("boi").innerHTML=boi;
document.getElementById("sbi").innerHTML=sbi;

document.getElementById("ab1").innerHTML=ab1;
document.getElementById("ib1").innerHTML=ib1;
document.getElementById("boi1").innerHTML=boi1;
document.getElementById("sbi1").innerHTML=sbi1;
        
var ab22=ab1/(12*y);
var ib22=ib1/(12*y);
var boi22=boi1/(12*y);
var sbi22=sbi1/(12*y);
        
var ab2,ib2,boi2,sbi2;
ab2=ab22.toFixed(2);
ib2=ib22.toFixed(2);
boi2=boi22.toFixed(2);
sbi2=sbi22.toFixed(2);
        
document.getElementById("ab2").innerHTML=ab2;
document.getElementById("ib2").innerHTML=ib2;
document.getElementById("boi2").innerHTML=boi2;
document.getElementById("sbi2").innerHTML=sbi2;
        
        
        
        
    }
    
</script>
        
        
        
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

   <div class="container">
       <table class="table table-inverse">
  
  <tbody>
    <tr>
      
      <td>Enter Loan Amount</td>
      <td><input type=number name="loan" id="loan"></td>
    </tr>
    <tr>
      
      <td>Enter Years for Loan</td>
      <td><input type=number name="years" id="years"></td>
    </tr>
    <tr>
        <td></td>
      <td><input type="submit" value="Calculate it" onclick='calc()' class="btn btn-primary"></td>
    </tr>
  </tbody>
</table>
   </div>
   
   
   <div class="container">
   
       <table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>AXIS BANK</th>
      <th>ICICI BANK</th>
      <th>BANK OF INDIA</th>
      <th>STATE BANK OF INDIA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Interest</th>
      <th>6%</th>
      <th>7%</th>
      <th>6.5%</th>
      <th>6.8%</th>
    </tr>
    <tr>
      <th scope="row">Interest To Pay</th>
      <td><div id="ab"></div></td>
      <td><div id="ib"></div></td>
      <td><div id="boi"></div></td>
      <td><div id="sbi"></div></td>
    </tr>
    <tr>
      <th scope="row">Total Amount To Pay</th>
      <td><div id="ab1"></div></td>
      <td><div id="ib1"></div></td>
      <td><div id="boi1"></div></td>
      <td><div id="sbi1"></div></td>
    </tr>
    
    <tr>
      <th scope="row">EMI</th>
      <td><div id="ab2"></div></td>
      <td><div id="ib2"></div></td>
      <td><div id="boi2"></div></td>
      <td><div id="sbi2"></div></td>
    </tr>
    
  </tbody>
</table>
   
   

   
   
   
   
</div>
    
    
    
    
    
    
</body>   
    
</html>