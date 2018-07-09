<?php
//starting the session
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=md5($_POST['password']);
	


	//Sql Statement
	$sql="SELECT * FROM users WHERE uname='$username' AND upass='$password' AND ustatus=1";

	//making connection
	include('connection.php');

	//querying Data
	$qry=mysqli_query($conn, $sql);

	//counting the rows
	$count=mysqli_num_rows($qry);

	//Messaging to user
	if($count==1)
	{	

		$_SESSION["name"] = $username;
		//redirect to dashboard.php
		header('Location: dashboard.php');

		echo "Login Success";	}
	else
	{echo "Something Wrong! Please correct it";	}

	//Closing Connection
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="" name="frmLogin" enctype="multipart/form-data">
		<fieldset>
			<legend>Login</legend>
			<input type="text" name="user" placeholder="username">
			<br/>
			<input type="password" name="password" placeholder="password">
			<br/>
			
			<br/>
			<input type="submit" name="submit" value="Login">
			<br>Not Member <a href="adduser.php">Registesr Here</a>

		</fieldset>

	</form>

</body>
</html>