<!DOCTYPE html>
<?php
include('translate.php');
include ('connect.php');

?>
    <html>

    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="shop.css">
        
         
        <link rel="icon" type="text/css" href="images/crown.png">
</head>
    <body>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="images/crown.png" width=60 height="60"></div>
                <div class="main1">
                    <ul>
                        <li><a href="#animals1">ANIMALS</a></li>
                        <li><a href="#sefi1">SEEDS</a></li>
                        <li><a href="#others1">OTHERS</a></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="sell_main.php">SELL</a></li>
                    </ul>
                </div>
            </div>
        </div>
            
               
        <div id="animals1"></div>
        <div class="nav2">
            <br>
            <br>
            
            <div class="headings">
                
            <div class="next"><a href="#sefi1"><img src="images/down.png" width=50px height=50px></a></div>  
            <h1>ANIMALS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from animals;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='animals' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary btn1'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class='btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="sefi1"></div>
        <div class="nav3">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#others1"><img src="images/down.png" width=50px height=50px></a>
                </div>
                <h1>SEEDS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from sefi;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='animals' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary' style='background-color:rgba(255,255,255,0.5);'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class='btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="others1"></div>
        <div class="nav4">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#top"><img src="images/up.png" width=50px height=50px></a>
                </div>
                <h1>OTHERS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from others;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='animals' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary btn1'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class=' btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
    </body>

    </html>