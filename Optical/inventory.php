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
    <title>DVOIS</title>
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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a href="" class="navbar-brand">Duray Veron Optical Clinic</a>
             </br>
             <div class="dropdown pull-right">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><span class='glyphicon glyphicon-user' aria-hidden='true'></span>
                <?php echo $session_username . " ($session_role)"; ?> <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#logout" data-toggle="modal"><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Logout</a></li>
                <li><a href="#changepass" data-toggle="modal"><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Change Password</a></li>
            </ul>
            
        </div>
        </div>
    </nav>
    </br>
    </br>
    </br>

    
    <div class="container">
       <a href="#add" data-toggle="modal">
                <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Add Supplier</button>
            </a> 
        <br>
        <br>
        <table id="example" class="display nowrap" cellspacing="0" width="80%">
            <thead>
                <tr>
                    <th>SupplierID</th>
                    <th>SupplierName</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                   <th>SupplierID</th>
                    <th>SupplierName</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Option</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM suppliers ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $sup_Id = $row['sup_Id'];
                            $sup_Name = $row['sup_Name'];
                            $location = $row['location'];
                            $contact_Number = $row['contact_Number'];

                    ?>
                <tr>
                    <td>
                        <?php echo $sup_Id; ?>
                    </td>
                    <td>
                        <?php echo $sup_Name; ?>
                    </td>
                    <td>
                        <?php echo $location; ?>
                    </td>
                    <td>
                        <?php echo $contact_Number; ?>
                    </td>
                   
                    <td>
                       
                       
                        <a href="#edit<?php echo $sup_Id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'>Update</button>
                        </a>
                        <a href="#delete<?php echo $sup_Id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                        </a>
                    </td>
                   
                   
                    <!--ChangePassword-->
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
                    <div id="edit<?php echo $sup_Id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Update Supplier Item</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="edit_item_id" value="<?php echo $sup_Id; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="sup_Name">Supplier Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sup_Name" name="sup_Name" value="<?php echo $sup_Name; ?>" placeholder="sup_Name" required autofocus> </div></br>
                                            <label class="control-label col-sm-2" for="location">location:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="location" name="location" value="<?php echo $location; ?>" placeholder="location" required> </div></br>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2" for="contact_Number">Contact Number:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="contact_Number" name="contact_Number" value="<?php echo $contact_Number; ?>" placeholder="contact_Number" required> </div></br>
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
                    <div id="delete<?php echo $sup_Id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $sup_Id; ?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete Supplier Named <strong>
                                                <?php echo $sup_Name; ?>?</strong> </div>
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
                            $edit_item_id = $_POST['edit_item_id'];
                            $sup_Name = $_POST['sup_Name'];
                            $location = $_POST['location'];
                            $contact_Number = $_POST['contact_Number'];
                            $sql = "UPDATE suppliers SET 
                                sup_Name='$sup_Name',
                                location='$location',
                                contact_Number='$contact_Number'
                                
                                WHERE sup_Id='$edit_item_id' ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="inventory.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM suppliers WHERE sup_Id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM suppliers WHERE sup_Id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM suppliers WHERE sup_Id='$delete_id' ";
                                    echo '<script>window.location.href="inventory.php"</script>';
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
                            $sup_Name = $_POST['sup_Name'];
                            $location = $_POST['location'];
                            $contact_Number = $_POST['contact_Number'];
                        $sql = "INSERT INTO suppliers (sup_Name,location,contact_Number)VALUES ('$sup_Name','$location','$contact_Number')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inventory_query = "INSERT INTO suppliers(sup_Name,location,contact_Number)VALUES ('$sup_Name','$location','$contact_Number')";
                                echo '<script>window.location.href="inventory.php"</script>';
                        } 
                    }

                  

                  
?>
            </tbody>
        </table>
        </div>
   
    <!--Add Item Modal -->
    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Supplier</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sup_Name">Supplier Name:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="sup_Name" name="sup_Name" placeholder="Supplier Name" autocomplete="off" autofocus required> </div>
                            <label class="control-label col-sm-2" for="location">Location:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Location" autocomplete="off" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact_Number">Contact number:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="contact_Number" name="contact_Number" placeholder="Contact number" autocomplete="off" required> </div>
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
