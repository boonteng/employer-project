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
<form method="POST" action="a_add_customer.php">
<button type="submit" class="btn btn-info pull-right">Add new customer</button>
</form>
<table width="98%" class="table table-hover" align="center" border="2" cellpadding="1" cellspacing="1">
<tr>
<th>Company Id</th>
<th>Company Name</th>
<th>Password</th>
<th>Address1</th>
<th>Address2</th>
<th>City</th>
<th>Country</th>
<th>State</th>
<th>Postal Code</th>
<th>Time Zone</th>
<th>Phone</th>
<th>Fax</th>
<th>Mobile</th>
<th>Toll Free</th>
<th>Website</th>
<th>Action</th>
</tr>

<?php
$conn = mysqli_connect('localhost','root','','veecotech');
if ($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="SELECT * FROM customer";
$result = $conn->query($sql);
//display all data in database
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		echo"<tr><td>".$row['company_id']."</td><td>".$row['company_name']."</td><td>".$row['password']."</td><td>".$row['address1']
		."</td><td>".$row['address2']."</td><td>".$row['city']."</td><td>".$row['country']."</td><td>".$row['state']."</td><td>".$row
		['postal_code']."</td><td>".$row['time_zone']."</td><td>".$row['phone']."</td><td>".$row['fax']."</td><td>".$row['mobile'].
		"</td><td>".$row['toll_free']."</td><td>".$row['website']."</td><td>"."<a href='a_edit_customer.php?edit=$row[company_id]'>Edit</a><br/><a href='a_delete_customer.php?del=$row[company_id]'>Delete</a>"."</td></tr>";
	}
	echo"</table>";
}
else{
	echo "0 result";
}
$conn->close();
?>

</table>
</body>
</html>
<?php require('footer.html'); ?>