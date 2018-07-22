<html>
<body>
<?php
require('header.html');
require('c_nav.php');
?>
<table>
<form method="POST" action="c_add_customer.php">
<button type="submit" class="btn btn-info pull-right">Add new customer</button>
</form>
<table width="98%" class="table table-hover" align="center" border="2" cellpadding="1" cellspacing="1">
<tr>
<th>Company Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
//select data from retail database for display 
$sql="SELECT * FROM retail";
$result = $conn->query($sql);
//display data from retail database
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		echo"<tr><td>".$row['r_name']."</td><td>".$row['r_email']."</td><td>".$row['r_phone']."</td><td>"."<a href='c_edit_customer.php?edit=$row[retail_id]'>Edit</a><br/><a href='c_delete_customer.php?del=$row[retail_id]'>Delete</a>"."</td></tr>";
	}
	echo"</table>";
}
else{
	echo "0 result";
}
$conn->close();
?>
</table>
<table>
<form method="POST" action="c_add_product.php">
<button type="submit" class="btn btn-info pull-right">Add new product</button>
</form>
<table width="98%" class="table table-hover" align="center" border="2" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
//select data from product database for display
$sql="SELECT * FROM product";
$result = $conn->query($sql);
//display data from product database
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		echo"<tr><td>".$row['p_name']."</td><td>".$row['p_price']."</td><td>"."<a href='c_edit_product.php?edit=$row[p_id]'>Edit</a><br/><a href='c_delete_product.php?del=$row[p_id]'>Delete</a>"."</td></tr>";
	}
	echo"</table>";
}
else{
	echo "0 result";
}
$conn->close();
?>
</table>
</table>
</body>
</html>
	<?php require('footer.html'); ?>