<?php
include ("config.php");
$pcode = $pname = "";
$pcodeErr = $pnameErr = "";
 if(isset($_POST["btnadd"])){
 	if(empty($_POST["pcode"])){
 		$pcodeErr = "Empty";
 	}else{
 		$pcode = $_POST["pcode"];	
 	}

 	if(empty($_POST["pname"])){
 		$pnameErr = "Empty";
 	}else{
 		$pname = $_POST["pname"];	
 	}

 	if($pcode && $pname){
 		$save_data = mysqli_query($connection,"INSERT INTO product(pcode,pname) VALUES('$pcode','$pname')");
 	}
 }
 if(isset($_POST["btnview"])){
 	header("location:inventory.php");
 }
?>
<style type="text/css">
	.error{
		color: red;
	}
</style>

<center>
	<h1>WELCOME</h1>
	<a href="logout.php">Logout</a>
</center>

<hr>
<center>
	<form method="POST">
		<table border="0" width="20%">
			<tr>
				<td><center>Product Code:<input type="text" name="pcode" placeholder="product code"><span class="error"><?ph    p echo $pcodeErr;?></span></center></td>
			</tr>
			<tr>
				<td><center> Product Name:<input type="text" name="pname" placeholder="product name"> <span class="error"><?php echo $pnameErr;?></span></center></td>
			</tr>
			<tr>
				<td><center><input type="submit" name="btnadd" value="Add">
					<input type="submit" name="btnview" value="View"></center></td>
			</tr>
			
		</table>
	</form>
</center>