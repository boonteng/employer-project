<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
require('header.html');
require('c_nav.php');
?>
<?php
//connect to database
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
if(isset($_GET['del']))
{
	$retail_id = $_GET['del'];
	$sql="DELETE FROM retail WHERE retail_id='$retail_id'";
	$result = $conn->query($sql);
	//auto refresh the page after the delete action
	echo"<meta http-equiv='refresh' content='0;url=c_cpm.php'>";
}