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
	$retail_id = $_GET['edit'];
	$sql="SELECT * FROM retail WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	$row= $result->fetch_assoc();
}
//update new data into database
if(isset($_POST['new_retail_name']))
{
	$new_r_name =$_POST['new_r_name'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_name='$new_r_name'WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
if(isset($_POST['new_r_contactname']))
{
	$new_r_contactname =$_POST['new_r_contactname'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_contactname='$new_r_contactname' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}	
if(isset($_POST['new_r_email']))
{
	$new_r_email =$_POST['new_r_email'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_email='$new_r_email' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}	
if(isset($_POST['new_r_address']))
{
	$new_r_address =$_POST['new_r_address'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_address='$new_r_address' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
if(isset($_POST['new_r_country']))
{
	$new_r_country =$_POST['new_r_country'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_country='$new_r_country' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
if(isset($_POST['new_r_phone']))
{
	$new_r_phone =$_POST['new_r_phone'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_phone='$new_r_phone' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
if(isset($_POST['new_r_mobile']))
{
	$new_r_mobile =$_POST['new_r_mobile'];
	$retail_id = $_POST['retail_id'];
	$sql = "UPDATE retail SET r_mobile='$new_r_mobile' WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}
?>
<form action="c_edit_customer.php" method="POST">
<div class="form-group row">
			<label class="col-xs-1 control-label">Company Name:</label>
			<div class="col-xs-10">
				<input type="text" name="new_r_name" value="<?php echo $row['r_name']?>" size="100" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Contact Person Name: </label>
			<div class="col-xs-10">
				<input type="text" name="new_r_contactname" value="<?php echo $row['r_contactname']?>" size="20" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Email:</label>
			<div class="col-xs-10">
				<input type="text" name="new_r_email" value="<?php echo $row['r_email']?>" size="100" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address:</label>
			<div class="col-xs-10">
				<input type="text" name="new_r_address" value="<?php echo $row['r_address']?>" size="100" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Country: </label>
			<div class="col-xs-10">
				<input type="text" name="new_r_country" value="<?php echo $row['r_country']?>" size="50" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Phone: </label>
			<div class="col-xs-10">
				<input type="text" name="new_r_phone" value="<?php echo $row['r_phone']?>" size="20" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Mobile: </label>
			<div class="col-xs-10">
				<input type="text" name="new_r_mobile" value="<?php echo $row['r_mobile']?>" size="20" class="form-control"/>
				<input type="hidden" name="retail_id" value="<?php echo $row['retail_id']?>" size="100" class="form-control"/>
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