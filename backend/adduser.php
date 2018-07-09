<?php
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=md5($_POST['password']);
	$email=$_POST['email'];
	$status=$_POST['status'];


	//Sql Statement
	$sql="INSERT INTO users (uname, upass, uemail, ustatus) VALUES ('$username', '$password' ,'$email', '$status')";

	//making connection
	include('connection.php');

	//INserting Data
	$qry=mysqli_query($conn, $sql);

	//Messaging to user
	if($qry)
	{		echo "Data Inserted";	}
	else
	{echo "Data not Inserted";	}

	//Closing Connection
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<form method="POST" action="" name="frmAddUser" enctype="multipart/form-data">
		<fieldset>
			<legend>Add User</legend>
			<input type="text" name="user" placeholder="username">
			<br/>
			<input type="password" name="password" placeholder="password">
			<br/>
			<input type="email" name="email" placeholder="you@domain.com">
			<br/>
			<input type="radio" name="status" value="1" checked>Active
			<input type="radio" name="status" value="0">Deactive
			<br/>
			<input type="submit" name="submit" value="Add User">
			<br>
			Already Member <a href="index.php">Click Here</a>

		</fieldset>
	</form>

</body>
</html>