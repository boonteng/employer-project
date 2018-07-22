<html>
<body>
<?php
session_start();
print'<h1>Welcome back,' . $_SESSION['company_name'] . '!
<button type="logout" name="logout" class="btn btn-default"><a href="c_login.php">LogOut</a></button>
</h1>';
?>
<body>
	
	<ul class="nav nav-tabs">
			<li role="presentation"><a href="c_home.php">Home</a></li>
			<li role="presentation"><a href="#">Dashboard</a></li>
			<li role="presentation"><a href="c_quotation.php">Quotation</a></li>
			<li role="presentation"><a href="c_invoice.php">Invoice</a></li>
			<li role="presentation"><a href="c_cpm.php">Customers & Product Maintenance</a></li>
			<li role="presentation"><a href="c_setting.php">Setting</a></li>
	</ul>
	
</body>
</html>