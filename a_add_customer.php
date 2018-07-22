<html>
<head>
	<meta charset="utf-8">
	<title>Add New Customer</title>
</head>
<body>

<?php
require('header.html');
require('a_nav.html');	
			if(isset($_POST['submitted']))
			{
				if($dbc = mysqli_connect('localhost','root',''))
				{	
					if(mysqli_select_db($dbc,'veecotech'))
					{
						$problem = FALSE;
						
						if(!empty($_POST['company_name']))
						{
							$company_name = trim($_POST['company_name']);
							$password = trim($_POST['password']);
							$address1 = trim($_POST['address1']);
							$address2 = trim($_POST['address2']);
							$city = trim($_POST['city']);
							$country = trim($_POST['country']);
							$state = trim($_POST['state']);
							$postal_code = trim($_POST['postal_code']);
							$time_zone = trim($_POST['time_zone']);
							$phone = trim($_POST['phone']);
							$fax = trim($_POST['fax']);
							$mobile = trim($_POST['mobile']);
							$toll_free = trim($_POST['toll_free']);
							$website = trim($_POST['website']);
						}
						else
						{
							print'<p style="color:red;">Please enter company name and country.</p>';
							$problem=TRUE;
						}
						
						if(!$problem)
						{//insert all date into database
							$query = "INSERT INTO customer(company_id, company_name, password, address1, address2, city, country, state, postal_code,
							time_zone, phone, fax, mobile, toll_free, website) VALUES(0, '$company_name', '$password', '$address1', '$address2', '$city', 
							'$country', '$state', '$postal_code', '$time_zone', '$phone', $fax, '$mobile', '$toll_free', '$website')";
							
							if(mysqli_query($dbc,$query))
							{
								print'<p>You have successful added a new customer!</p>';
								echo"<meta http-equiv='refresh' content='0;url=a_customer_management.php'>";
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
					{//show why failed connect to database
						print'<p style="color:red;">Could not select the database because: <br/>'
						 . mysqli_connect_error() . '.</p>';
					}
				}
				else
				{//print while got connection error with mysqli
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
	<form action="a_add_customer.php" method="post">

		<div class="form-group row">
			<label class="col-xs-1 control-label">Company Name:</label>
			<div class="col-xs-10">
				<input type="text" name="company_name" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Password: </label>
			<div class="col-xs-10">
				<input type="password" name="password" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address 1:</label>
			<div class="col-xs-10">
				<input type="text" name="address1" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Address 2:</label>
			<div class="col-xs-10">
				<input type="text" name="address2" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">City: </label>
			<div class="col-xs-10">
				<input type="text" name="city" size="50" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Country: </label>
			<div class="col-xs-10">
				<input type="text" name="country" size="50" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">State: </label>
			<div class="col-xs-10">
				<input type="text" name="state" size="50" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Postal Code: </label>
			<div class="col-xs-10">
				<input type="text" name="postal_code" size="10" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Time Zone: </label>
			<div class="col-xs-10">
				<input type="text" name="time_zone" size="50" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Phone: </label>
			<div class="col-xs-10">
				<input type="text" name="phone" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Fax: </label>
			<div class="col-xs-10">
				<input type="text" name="fax" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Mobile: </label>
			<div class="col-xs-10">
				<input type="text" name="mobile" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Toll Free: </label>
			<div class="col-xs-10">
				<input type="text" name="toll_free" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Website: </label>
			<div class="col-xs-10">
				<input type="text" name="website" size="50" class="form-control"/>
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