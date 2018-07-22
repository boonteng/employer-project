<html>
<head>
	<meta charset="utf-8">
	<title>Add New Customer</title>
</head>
<body>

	
<?php
require('header.html');
require('c_nav.php');	
			if(isset($_POST['submitted']))
			{
				if($dbc = mysqli_connect('localhost','root',''))
				{	
					if(mysqli_select_db($dbc,'veecotech'))
					{
						$problem = FALSE;
						
						if(!empty($_POST['r_name']))
						{
							$r_name = trim($_POST['r_name']);
							$r_contactname = trim($_POST['r_contactname']);
							$r_email = trim($_POST['r_email']);
							$r_address = trim($_POST['r_address']);
							$r_country = trim($_POST['r_country']);
							$r_phone = trim($_POST['r_phone']);
							$r_mobile = trim($_POST['r_mobile']);
						}
						else
						{
							print'<p style="color:red;">Please enter company name and country.</p>';
							$problem=TRUE;
						}
						
						if(!$problem)
						{//insert data into database
							$query = "INSERT INTO retail(retail_id, r_name, r_contactname, r_email, r_address, r_country, r_phone, r_mobile)
							VALUES(0, '$r_name', '$r_contactname', '$r_email', '$r_address', '$r_country', 
							'$r_phone', '$r_mobile')";
							
							if(mysqli_query($dbc,$query))
							{
								print'<p>You have successful added a new customer!</p>';
								echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
							}
							else
							{
								print'<p style="color:red;">Could not register because:<br/>' . mysqli_connect_error() . '.</p>
								<p>The query was ' . $query . '</p>';
							}
							mysqli_close($dbc);
						}
					}
					else
					{
						print'<p style="color:red;">Could not select the database because: <br/>'
						 . mysqli_connect_error() . '.</p>';
					}
				}
				else
				{
					print'<p style="color: red;">Could not connect to MySQL: ' . mysqli_connect_error() . ' </p>';
				}
			}
		?>
<table class="table table-hover" style="width:98%"  align="center">
<thead>
	<tr>
		<th>Add New Customer</th>
	</tr>
</table>
	<form action="c_add_customer.php" method="post">

		<div class="form-group row">
			<label class="col-xs-1 control-label">Retail Name:</label>
			<div class="col-xs-10">
				<input type="text" name="r_name" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Contact Person Name: </label>
			<div class="col-xs-10">
				<input type="text" name="r_contactname" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Email:</label>
			<div class="col-xs-10">
				<input type="text" name="r_email" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address:</label>
			<div class="col-xs-10">
				<input type="text" name="r_address" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Country: </label>
			<div class="col-xs-10">
				<input type="text" name="r_country" size="50" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Phone: </label>
			<div class="col-xs-10">
				<input type="text" name="r_phone" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Mobile: </label>
			<div class="col-xs-10">
				<input type="text" name="r_mobile" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
			</div>
		</div>
	<input type="hidden" name="submitted" value="true!"/>

</form>

</body>
</html>
<?php require('footer.html'); ?>