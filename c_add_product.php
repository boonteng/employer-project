<html>
<head>
	<meta charset="utf-8">
	<title>Add New Products</title>
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
						
						if(!empty($_POST['p_name']))
						{
							$p_name = trim($_POST['p_name']);
							$p_price = trim($_POST['p_price']);
							$p_description = trim($_POST['p_description']);
						}
						else
						{
							print'<p style="color:red;">Please enter company name and country.</p>';
							$problem=TRUE;
						}
						
						if(!$problem)
						{//insert data into database
							$query = "INSERT INTO product(p_id, p_name, p_price, p_description)
							VALUES(0, '$p_name', '$p_price', '$p_description')";
							
							if(mysqli_query($dbc,$query))
							{
								print'<p>You have successful added a new product!</p>';
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
		<th>Add New product</th>
	</tr>
</table>
	<form action="c_add_product.php" method="post">

		<div class="form-group row">
			<label class="col-xs-1 control-label">Product Name:</label>
			<div class="col-xs-10">
				<input type="text" name="p_name" size="100" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Price: </label>
			<div class="col-xs-10">
				<input type="text" name="p_price" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Description:</label>
			<div class="col-xs-10">
				<input type="text" name="p_description" size="100" class="form-control"/>
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