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


?>
