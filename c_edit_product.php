<html>
<head>
	<meta charset="utf-8">
	<title>Customer Management</title>
</head>
<body>
<?php
require('header.html');
require('c_nav.php');
?>

<?php
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
//do while user press edit link
if(isset($_GET['edit']))
{
	$p_id = $_GET['edit'];
	$sql="SELECT * FROM product WHERE p_id='$p_id'";
	$result = $conn->query($sql);
	$row= $result->fetch_assoc();
	//echo"<meta http-equiv='refresh' content='0;url='>";
}
//update new data into database
if(isset($_POST['new_p_name']))
{
	$new_p_name =$_POST['new_p_name'];
	$p_id = $_POST['p_id'];
	$sql = "UPDATE product SET p_name='$new_p_name'WHERE p_id='$p_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
if(isset($_POST['new_p_price']))
{
	$new_p_price =$_POST['new_p_price'];
	$p_id = $_POST['p_id'];
	$sql = "UPDATE product SET p_price='$new_p_price' WHERE p_id='$p_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}	
if(isset($_POST['new_p_description']))
{
	$new_p_description =$_POST['new_p_description'];
	$p_id = $_POST['p_id'];
	$sql = "UPDATE product SET p_description='$new_p_description' WHERE p_id='$p_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}	
?>
<form action="c_edit_product.php" method="POST">
<div class="form-group row">
			<label class="col-xs-1 control-label">Product Name:</label>
			<div class="col-xs-10">
				<input type="text" name="new_p_name" value="<?php echo $row['p_name']?>" size="100" class="form-control"/>
				<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Price: </label>
			<div class="col-xs-10">
				<input type="text" name="new_p_price" value="<?php echo $row['p_price']?>" size="20" class="form-control"/>
				<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Description:</label>
			<div class="col-xs-10">
				<input type="text" name="new_p_description" value="<?php echo $row['p_description']?>" size="100" class="form-control"/>
				<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
			</div>
		</div>
</form>

</body>
</html>
<?php require('footer.html'); ?>