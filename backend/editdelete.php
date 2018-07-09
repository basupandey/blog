<?php
include('inc_session.php');
include('connection.php');
include('functions.php');
$action=$_GET['action'];
$id=$_GET['id'];
switch($action)
{
	case 'delete':
	{
		$table='users';
		delete($table, $id);
		break;
	}
	case 'edit':
	{
		editUser($id);
		//echo "edit";
		break;
	}
	default:
	{
		echo "Nothing to do";
		break;
	}
}


if(isset($_POST['submit']))
{

	$idu=$nameu=$emailu=$passwd=$statusu="";
	$nameuErr=$emailuErr="";
	$idu=validate_input($_POST['uid']);
	$nameu=validate_input($_POST['uname']);
	if (!preg_match("/^[a-zA-Z ]*$/",$nameu)) {
  	echo  "Only letters and white space allowed"; 
  	exit;
	}

	$emailu=validate_input($_POST['uemail']);
	if (!filter_var($emailu, FILTER_VALIDATE_EMAIL)) {
  	echo  "Invalid email format"; 
  	exit;
		}
	$passwd=validate_input($_POST['upass']);
	$statusu=validate_input($_POST['ustatus']);
if(empty($passwd))
{
	$passu='';
}

else{
	$passu=md5($passwd);
}
	

	updateUser($idu, $nameu, $emailu, $passu, $statusu);
}
?>
