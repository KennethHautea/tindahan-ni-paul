<?php 
  session_start();
?>
<html>
<head>
	<!--css bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--jquery bootstrap-->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--js bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<title>Welcome To NickAutomatic Shop</title>
</head>
<body>
	<?php include ("navbar.php");?>
  <div class="spacer">
    <div class="container">
    <br>
    <div>
      <?php include("php/login_verify.php"); ?>
    </div> <br>   
    <div class="row">

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/1.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>ACTION FIGURE NCK</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/2.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>BASIC BLOCK CAMOU</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/3.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>DEFILED</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div> 
    </div> 
    </div> <br>
  </div>

  <div class="container">    
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/4.jpg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>BREH SNAPBACK</h5>
          </div>
          <div class="panel-footer">
            <h5>₱1,200.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/5.jpg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>BASIC BLOCK KAIZEN</h5>
          </div>
          <div class="panel-footer">
            <h5>₱1,200.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/6.jpg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>BREH TRUCKER</h5>
          </div>
          <div class="panel-footer">
            <h5>₱1,200.00</h5>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>

  <div class="container">    
    <div class="row">

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/7.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>MONSTER RAMEN</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/8.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>DIMES CHICKEN</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-body">
            <img src="img/tbs/9.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-heading">
            <h5>WAR HAMMER</h5>
          </div>
          <div class="panel-footer">
            <h5>₱550.00</h5>
          </div>
        </div>
      </div>

    </div>
  </div><br><br>
	<?php include ("footer.php");?>
</body>
</html>