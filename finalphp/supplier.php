<html>
<head>
	<title>Optical Sales and Inventory Management</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" id="bgc1">
  <h2>D-V Optical</h2>
</div>
<?php include ("sidenav.php");?>
<div class="sidebar">
  <a class="active" href="supplier.php">Supplier</a>
  <a href="product.php">Product</a>
  <a href="customer.php">Customer</a>
  <a href="transaction.php">Transaction</a>
  <a href="report.php">Reports</a>
  <a href="#about">Logout</a>
</div>
<div class="content">
  <center>
  	<h2>Supplier Details</h2>
  </center><br>
</div>
<div class="table" style="overflow-y:auto;">
  	<table>
    	<tr>
      		<th>ID</th>
      		<th>Name</th>
      		<th>Contact Number</th>
      		<th>Location</th>
    	</tr>
  	</table>
<div class="container-fluid">
	<div class="row">
  	<div class="col-sm-4 view">
		<button type="button" class="btn btn-primary" href="#" >View Delivery</button>
		</div>
  	<div class="col-sm-4"></div>
  	<div class="col-sm-4 group">
			<div>
				<button type="button" class="btn btn-success" href="#" data-toggle="modal" data-target="#myModal" >Add</button>
				<button type="button" class="btn btn-warning" href="#" >Update</button>
				<button type="button" class="btn btn-danger" href="#" >Delete</button>
			</div>

		</div>
</div>
	</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>