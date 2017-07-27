
<?php

include("donate_get.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Donate!</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
          ['Needs', 'Donations %']
          , ['Education', 25]
          , ['Naturabl Calamities', 20]
          , ['Medication', 20]
          , ['Farming', 35]
        ]);
            var options = {
                title: 'Donation Distribution(Approx.)'
                , height: 500
                , pieHole: 0.4
                , width: 500
            , };
            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <style>
        body,
        html {
            background-image: url(images/farm.jpg);
            background-size: cover;
            margin: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container {
            min-height: 100% !important;
            height: 70vh !important;
        }
        
        .form-control {
            height: 30px !important;
        }
        
        .bg1 {
            width: 25%;
            background-color: rgba(0, 0, 0, 0.2);
            margin: 4%;
            color: white;
            min-height: 100%;
            height: 100%;
            !important
        }
        
        .bg1 h1 {
            font-size: 40px;
            font-family: fantasy;
        }
        
        .bg1 p {
            font-size: 16px;
            font-family: fantasy;
        }
        
        .btn {
            width: 80% !important;
            font-size: 15px;
            font-weight: bolder;
        }
    </style>

    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="index.php">Digitization Farming</a><?php include("translate.php");?> </div>
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="active"><a href="donate.php">Donate</a></li>
                    <li><a href="personal.php">Personal Donations</a></li>
                    
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="container bg1 col-lg-6">
                    <h1>Help To Farmers.</h1>
                    <p>
                        <br>The value of life is not in its duration, but in its donation. You are not important because of how long you live, you are important because of how effective you live.
                        <br>
                        <br>Desperate farmers collapsed before my eyes. Bollywood should get real and do more. --Nana Patekar</p>
                </div>
                <div class="container bg1 col-lg-6 ">
                    <form action="donatemain.php" method="post">
                        <br> <img src="images/paypal.png" class="center-block" width="200" height="70">
                        <br>
                        <label for="village">Select Village:</label>
                        <br>
                        <select class="form-control" name="village">
                            <option value="" active>--SELECT VILLAGE--</option>
                            <?php echo $options; ?>
                        </select>
                        <br>
                        <label for="amount">Amount(in Rs.):</label>
                        <br>
                        <input type="number" class="form-control" id="amount" name="amount">
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary" name="contribute">
                        <br>
                        <br>
                        <a href="donate_total.php">
                            <button type="button" class="btn btn-success" name="tdonations">Check Total Donations!</button>
                        </a>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" name="charts">Division of Donations!</button>
                    </form>
                </div>
                <div class="container bg1 col-lg-6"> <img src="images/donate.jpg" class="img-thumbnail" width="304" height="236">
                    <br> <img src="images/hand.jpg" class="img-thumbnail" width="304" height="236"> </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Donation Distribution</h4> </div>
                    <div class="modal-body">
                        <div id="donutchart" style="width:100%;height:100%"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>