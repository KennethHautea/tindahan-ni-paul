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
  <a href="supplier.php">Supplier</a>
  <a class="active" href="product.php">Product</a>
  <a href="customer.php">Customer</a>
  <a href="transaction.php">Transaction</a>
  <a href="report.php">Reports</a>
  <a href="#about">Logout</a>
</div>
<div class="content">
  <center>
  	<h2>Product Details</h2>
  </center><br>
</div>
<div class="table" style="overflow-y:auto;">
  	<table class="table">
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Product Name</th>
          <th>Original price</th>
          <th>Selling Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
    	<tbody>
        
      </tbody>
  	</table>
<div class="container-fluid">
	<div class="row">
  	<div class="col-sm-4 view">
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view" >View Damage Product</button>
		</div>
  	<div class="col-sm-4"></div>
  	<div class="col-sm-4 group">
			<div>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#prodadd" >Add</button>
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#produp" >Update</button>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#proddel" >Delete</button>
			</div>
		</div>
  </div>
</div>
</div>

<!-- Modal prod add-->
<div id="prodadd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Product</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">Product ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Product Name</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Original Price</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Selling Price</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Quantity</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Save</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal prod update-->
<div id="produp" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Product</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">Product ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Product Name</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Original Price</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Selling Price</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Quantity</label>
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

<!-- Modal prod delete-->
<div id="proddel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Are you sure you would like to delete this product?</p>
        <div>
          <button type="submit" class="btn btn-primary">OK</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal view damage-->
<div id="view" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delivery Details</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>Deliv ID</th>
              <th>Quantity</th>
              <th>Delivered Items</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#damadd" >Add</button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#damup" >Update</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#damdel" >Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dam add-->
<div id="damadd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Damage Product</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">Delivery ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Damage Quantity</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Delivered Item</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Save</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal dam update-->
<div id="damup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Delivery</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="text">Delivery ID</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Damage Quantity</label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="form-group">
              <label for="text">Delivered Item</label>
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

<!-- Modal dam delete-->
<div id="damdel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Are you sure you would like to delete this delivery?</p>
        <div>
          <button type="submit" class="btn btn-primary">OK</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>