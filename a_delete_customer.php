<html>
<head>
	<meta charset="utf-8">
	<title>Customer Management</title>
</head>
<body>
<?php
require('header.html');
require('a_nav.html');
?>
<?php
//connect to database
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
if(isset($_GET['del']))
{
	$company_id = $_GET['del'];
	$sql="DELETE FROM customer WHERE company_id='$company_id'";
	$result = $conn->query($sql);
	//auto refresh the page after the delete action
	echo"<meta http-equiv='refresh' content='0;url=a_customer_management.php'>";
}
</body>
</html>
<?php require('footer.html'); ?>