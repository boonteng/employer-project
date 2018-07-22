<?php
	define('TITLE', 'Login');
	require('header.html');
	print'<h1>Login Form</h1>';
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
	if(isset($_POST['submitted']))
	{
		if((!empty($_POST['company_name'])) && (!empty($_POST['password'])))
		{
			$company_name=$_POST['company_name'];
			$password=$_POST['password'];
			$sql = "SELECT * FROM customer WHERE company_name='$company_name' && password='$password' ";
			//if((strtolower($_POST['company_name']) == 'veecotech') && ($_POST['password'] == 'vee'))
			//{
				session_start();
				$_SESSION['company_name'] = $_POST['company_name'];
				$_SESSION['loggedin'] = time( );
				echo $_SESSION['company_name'];
				echo $_SESSION['loggedin'];
				header ('Location:c_home.php');
				exit();
			//} 
			//else
			//{
			//	print'<p>The submitted company name and password do not match those on file!<br />
			//	Go back and try again.</p>';
			//}
		}
		else
		{
			print'<p>Please make sure you enter both an company name address and a password!<br />
			Go back and try again.</p>';
		}
	}
	else
	{
		print'<form action="c_login.php" method="post">
		<div class="form-group row">
			<label class="col-xs-1 control-label">Company Name:</label>
			<div class="col-xs-10">
				<input type="text" name="company_name" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-1 control-label">Password: </label>
			<div class="col-xs-10">
				<input type="password" name="password" size="20" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<div clss="col-xs-offset-2 col-xs-10">
				<button type="submit" name="submit" class="btn btn-primary">Log In</button>
			</div>
		</div>
		<input type="hidden" name="submitted" value="true" />
		</form>';
	}
	require('footer.html');
	?>