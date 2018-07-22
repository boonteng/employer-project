<?php
	define('TITLE', 'Login');
	require('header.html');
	print'<h1>Login Form</h1>';

	if(isset($_POST['submitted']))
	{
		if((!empty($_POST['email'])) && (!empty($_POST['password'])))
		{
			if((strtolower($_POST['email']) == 'admin@portal.com') && ($_POST['password'] == 'admin'))
			{
				session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['loggedin'] = time( );
				echo $_SESSION['email'];
				echo $_SESSION['loggedin'];
				header ('Location:a_dashboard.php');
				exit();
			} 
			else
			{
				print'<p>The submitted email address and password do not match those on file!<br />
				Go back and try again.</p>';
			}
		}
		else
		{
			print'<p>Please make sure you enter both an email address and a password!<br />
			Go back and try again.</p>';
		}
	}
	else
	{
		print'<form action="adminlogin.php" method="post">
		<div class="form-group row">
			<label class="col-xs-1 control-label">Email address:</label>
			<div class="col-xs-10">
				<input type="text" name="email" size="20" class="form-control"/>
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
	
	
