<?php
include("config.php");
include "addproduct.php";


?>



 <hr>
 <center>
 <table border="1" width="50%">
 	<tr>
 		<td><center><b>Product Name</b></center></td>
 		<td><center><b>Product Code</b></center></td>
 		<td><center><b>Option</b></center></td>
 	</tr>
 	
 	<?php
 		$viewQuery = mysqli_query($connection,"SELECT * FROM product " );
 		while ($row = mysqli_fetch_assoc($viewQuery)) {
 			$id = $row["id"];
 			$db_pcode = $row["pcode"];
 			$db_pname = $row["pname"];
 			
 	echo "
 			<tr>
				<td>$db_pcode</td>
				<td>$db_pname</td>

				<td>
			<center><a href=''>Update</a>
			|
			<a href=''>Delete</a>
			</td>
			</tr>
			

 			";
 		}
 	?>

 </table>
 </center>

 