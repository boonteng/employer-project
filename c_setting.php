<html>
<head>
	<meta charset="utf-8">
	<title>Setting </title>
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
if(isset($_GET[company_id]))
{
	$company_id = $_GET[company_id];	
	$sql="SELECT * FROM customer WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	$row= $result->fetch_assoc();
}
if(isset($_POST['new_company_name']))
{
	$new_company_name =$_POST['new_company_name'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET company_name='$new_company_name'WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_password']))
{
	$new_password =$_POST['new_password'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET password='$new_password' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}	
if(isset($_POST['new_address1']))
{
	$new_address1 =$_POST['new_address1'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET address1='$new_address1' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}	
if(isset($_POST['new_address2']))
{
	$new_address2 =$_POST['new_address2'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET address2='$new_address2' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_city']))
{
	$new_city =$_POST['new_city'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET city='$new_city' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_country']))
{
	$new_country =$_POST['new_country'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET country='$new_country' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_state']))
{
	$new_state =$_POST['new_state'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET state='$new_state' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_postal_code']))
{
	$new_postal_code =$_POST['new_postal_code'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET postal_code='$new_postal_code' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_time_zone']))
{
	$new_time_zone =$_POST['new_time_zone'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET time_zone='$new_time_zone' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_phone']))
{
	$new_phone =$_POST['new_phone'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET phone='$new_phone' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_fax']))
{
	$new_fax =$_POST['new_fax'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET fax='$new_fax' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_mobile']))
{
	$new_mobile =$_POST['new_mobile'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET mobile='$new_mobile' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_toll_free']))
{
	$new_toll_free =$_POST['new_toll_free'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET toll_free='$new_toll_free' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
if(isset($_POST['new_website']))
{
	$new_website =$_POST['new_website'];
	$company_id = $_POST['company_id'];
	$sql = "UPDATE customer SET website='$new_website' WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	echo"<meta http-equiv='refresh' content='0;url=c_setting.php'>";
}
?>
<form action="c_setting.php" method="POST">
<div class="form-group row">
			<label class="col-xs-1 control-label">Company Name:</label>
			<div class="col-xs-10">
				<input type="text" name="new_company_name" value="<?php echo $row['company_name']?>" size="100" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Password: </label>
			<div class="col-xs-10">
				<input type="password" name="new_password" value="<?php echo $row['password']?>" size="20" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address 1:</label>
			<div class="col-xs-10">
				<input type="text" name="new_address1" value="<?php echo $row['address1']?>" size="100" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address 2:</label>
			<div class="col-xs-10">
				<input type="text" name="new_address2" value="<?php echo $row['address2']?>" size="100" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">City: </label>
			<div class="col-xs-10">
				<input type="text" name="new_city" value="<?php echo $row['city']?>" size="50" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Country: </label>
			<div class="col-xs-10">
				<input type="text" name="new_country" value="<?php echo $row['country']?>" size="50" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">State: </label>
			<div class="col-xs-10">
				<input type="text" name="new_state" value="<?php echo $row['state']?>" size="50" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Postal Code: </label>
			<div class="col-xs-10">
				<input type="text" name="new_postal_code" value="<?php echo $row['postal_code']?>" size="10" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Time Zone: </label>
			<div class="col-xs-10">
				<input type="text" name="new_time_zone" value="<?php echo $row['time_zone']?>" size="50" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Phone: </label>
			<div class="col-xs-10">
				<input type="text" name="new_phone" value="<?php echo $row['phone']?>" size="20" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Fax: </label>
			<div class="col-xs-10">
				<input type="text" name="new_fax" value="<?php echo $row['fax']?>" size="20" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Mobile: </label>
			<div class="col-xs-10">
				<input type="text" name="new_mobile" value="<?php echo $row['mobile']?>" size="20" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Toll Free: </label>
			<div class="col-xs-10">
				<input type="text" name="new_toll_free" value="<?php echo $row['toll_free']?>" size="20" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Website: </label>
			<div class="col-xs-10">
				<input type="text" name="new_website" value="<?php echo $row['website']?>" size="50" class="form-control"/>
				<input type="hidden" name="company_id" value="<?php echo $row['company_id']?>" size="100" class="form-control"/>
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