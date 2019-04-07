<?php
include("connection.php")



?>
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
<<<<<<< HEAD
  	<table>
    	<tr>
      		<th>ID</th>
      		<th>Name</th>
      		<th>Contact Number</th>
      		<th>Location</th>
    	</tr>
    

=======
  	<table class="table">
      <thead>
        <tr>
          <th>Sup ID</th>
          <th>Name</th>
          <th>Contact No</th>
          <th>Location</th>
        </tr>
      </thead>
    	<tbody>
        
      </tbody>
>>>>>>> ba9667ab6981373ca0427d33c6eaaacefc1bcbfa
  	</table>
<div class="container-fluid">
	<div class="row">
  	<div class="col-sm-4 view">
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view" >View Delivery</button>
		</div>
  	<div class="col-sm-4"></div>
  	<div class="col-sm-4 group">
			<div>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#suppadd" >Add</button>
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#suppup" >Update</button>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#suppdel" >Delete</button>
			</div>
		</div>
  </div>
</div>
</div>

<!-- Modal add-->
<div id="suppadd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Supplier</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="supplierAction.php">
            <div class="form-group">
<<<<<<< HEAD
              <label for="text">ID</label>
              <input type="text" class="form-control" id="sid" name="supid">
=======
              <label for="text">Supplier ID</label>
              <input type="text" class="form-control" id="text">
>>>>>>> ba9667ab6981373ca0427d33c6eaaacefc1bcbfa
            </div>
            <div class="form-group">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="text" name="supname">
            </div>
            <div class="form-group">
              <label for="text">Contact Number</label>
              <input type="text" class="form-control" id="text" name="supnum">
            </div>
            <div class="form-group">
              <label for="text">Address</label>
              <input type="text" class="form-control" id="text" name="supaddress">
            </div>
            <div>
              <input value="save" name="submit" type="submit" class="btn btn-success">
              
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal update-->
<div id="suppup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Supplier</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">Supplier ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Contact Number</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Address</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Update</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal delete-->
<div id="suppdel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Are you sure you would like to delete this supplier?</p>
        <div>
          <button type="submit" class="btn btn-primary">OK</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal view delivery-->
<div id="view" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delivery Details</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Contact Number</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Address</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Update</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>