<?php
include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Loader -->
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <script>
         $(document).ready(function() {
                $('#example').DataTable({});
            });
        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body onload="myFunction()" style="margin:0;">
    <?php include "navigation.php"?>
    </br>
    </br>
    </br>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <?php include ("sidenavcss.php");?>
             <?php include ("sidenav.php");?>

        </div>
  <div class="col-sm-8">
    <div class="container pull-right" >
        </br>
       <a href="#add" data-toggle="modal">
                <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Add product</button>
            </a> 
        <br>
        <br>
        <table id="example" class="display nowrap" cellspacing="0" width="100%" >
            <thead>
                <tr >
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Original Price</th>
                    <th>Selling Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Original Price</th>
                    <th>Selling Price</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $prod_Id = $row['prod_Id'];
                            $prod_Name = $row['prod_Name'];
                            $quantity = $row['quantity'];
                            $Original_Price = $row['Original_Price'];
                            $selling_Price = $row['selling_Price'];
                           

                           

                    ?>
                <tr>
                    <td>
                        <?php echo $prod_Id; ?>
                    </td>
                    <td>
                        <?php echo $prod_Name; ?>
                    </td>
                    <td>
                        <?php echo $quantity; ?>
                    </td>
                    <td>
                        <?php echo $Original_Price; ?>
                    </td>
                    <td>
                        <?php echo $selling_Price; ?>
                    </td>
                    
                    <td>
                        
                        
                        <a href="#edit<?php echo $prod_Id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'>Update</button>
                        </a>
                        <a href="#delete<?php echo $prod_Id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                        </a>
                    </td>
                   
                    

                    <div id="changepass" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <form action="" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Change Password</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Current:</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="current_password" required placeholder="Current Password" autofocus autocomplete="off"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">New:</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="new_password" required placeholder="New Password" autocomplete="off"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Repeat:</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="repeat_password" required placeholder="Repeat Password" autocomplete="off"> </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="change_pass">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Edit Item Modal -->
                    <div id="edit<?php echo $prod_Id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Update Item</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="edit_item_id" value="<?php echo $prod_Id; ?>">
				                                        <div class="form-group">
				                            <label class="control-label col-sm-2" for="prod_Name">Product Name:</label>
				                            <div class="col-sm-4">
				                                <input type="text" class="form-control" id="prod_Name" name="prod_Name" value="<?php $prod_Name ;?> placeholder="Product Name" autocomplete="off" autofocus required> </div>
				                            <label class="control-label col-sm-2" for="quantity">Quantity:</label>
				                            <div class="col-sm-4">
				                                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php $quantity ;?> placeholder="Quantity" autocomplete="off" required> </div>
				                        </div>
				                        <div class="form-group">
				                            <label class="control-label col-sm-2" for="selling_Price">Selling Price:</label>
				                            <div class="col-sm-4">
				                                <input type="number" class="form-control" id="selling_Price" name="selling_Price" value="<?php $selling_Price ;?> placeholder="Selling Price" autocomplete="off" required> </div>
				                          
				                          <label class="control-label col-sm-2" for="Original_Price">Original Price:</label>
				                            <div class="col-sm-4">
				                                <input type="number" class="form-control" id="Original_Price" name="Original_Price" value="<?php $Original_Price ;?> placeholder="Original Price" autocomplete="off" required> </div>
				                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Delete Modal -->
                    <div id="delete<?php echo $prod_Id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $prod_Id; ?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                <?php echo $prod_Name; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php
                        }
                        if(isset($_POST['change_pass'])){
                            $sql = "SELECT password FROM tbl_user WHERE username='$session_username'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row['password'] != $current_password){
                                        echo "<script>window.alert('Invalid Password');</script>";
                                        $passwordErr = '<div class="alert alert-warning"><strong>Password!</strong> Invalid.</div>';
                                    } elseif($new_password != $repeat_password) {
                                        echo "<script>window.alert('Password Not Match!');</script>";
                                        $passwordErr = '<div class="alert alert-warning"><strong>Password!</strong> Not Match.</div>';
                                    } else{
                                        $sql = "UPDATE tbl_user SET password='$new_password' WHERE username='$session_username'";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "<script>window.alert('Password Successfully Updated');</script>";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    }    
                                }
                            } else {
                                $usernameErr = '<div class="alert alert-danger"><strong>Username</strong> Not Found.</div>';
                                $username = "";
                            }
                        }


                        //Update Items
                        if(isset($_POST['update_item'])){
                         $prod_Name = $_POST['prod_Name'];
                        $quantity = $_POST['quantity'];
                        $Original_Price = $_POST['Original_Price'];
                        $selling_Price = $_POST['selling_Price'];
                            $sql = "UPDATE products SET 
                                prod_Name='$prod_Name',
                                quantity='$quantity',
                                Original_Price='$Original_Price',
                                selling_Price='$selling_Price'
                                WHERE prod_Id='$edit_item_id' ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="product.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM products WHERE prod_Id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM products WHERE prod_Id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM products WHERE prod_Id='$delete_id' ";
                                    echo '<script>window.location.href="product.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                    }

                    //Add Item        
                    if(isset($_POST['add_item'])){
                        $prod_Name = $_POST['prod_Name'];
                        $quantity = $_POST['quantity'];
                        $Original_Price = $_POST['Original_Price'];
                        $selling_Price = $_POST['selling_Price'];
                        $sql = "INSERT INTO products (prod_Name,quantity,selling_Price,Original_Price)VALUES ('$prod_Name','$quantity','$selling_Price','$Original_Price')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inventory_query = "INSERT INTO products(prod_Name,quantity,selling_Price,Original_Price)VALUES ('$prod_Name','$quantity','$selling_Price','$Original_Price')";
                            		echo '<script>window.location.href="product.php"</script>';
                        } 
                    }

                   

                    
?>
            </tbody>
        </table>
        </div>
        </div>
        <!--row end-->
        </div>
        <!--container-fluid end-->
        </div>
        
   
     <!--Add Item Modal -->
    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="prod_Name">Product Name:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="prod_Name" name="prod_Name" placeholder="Product Name" autocomplete="off" autofocus required> </div>
                            <label class="control-label col-sm-2" for="quantity">Quantity:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" autocomplete="off" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="selling_Price">Selling Price:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="selling_Price" name="selling_Price" placeholder="Selling Price" autocomplete="off" required> </div>
                          
                          <label class="control-label col-sm-2" for="Original_Price">Original Price:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="Original_Price" name="Original_Price" placeholder="Original Price" autocomplete="off" required> </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="add_item"><span class="glyphicon glyphicon-plus"></span> Add</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Logout Modal -->
    <div id="logout" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">3
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Logout</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                    <div class="alert alert-danger">Are you SURE you want to logout
                        <strong>
                            <?php echo $_SESSION['user_name']; ?>?
                        </strong>
                    </div>
                    <div class="modal-footer">
                        <a href="logout.php">
                            <button type="button" class="btn btn-danger">YES </button>
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>