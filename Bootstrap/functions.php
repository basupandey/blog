<?php
 function delete($table, $id)
 {

 	$sql="DELETE FROM $table WHERE id=$id";
 	include('connection.php');
 	$qry=mysqli_query($conn, $sql);
 	if($qry)
 	{

 		header('Location: dashboard.php');
 		echo "Data deleted success";
 	}

 	else
 	{
 		echo "Error";
 	}
 	mysqli_close($conn);
 }


 

 function editUser($id)
 {
 	
 $sql="SELECT * FROM users WHERE id=$id";
 	include('connection.php');

 	//$nameuErr=$emailuErr="";
 	$qry=mysqli_query($conn, $sql);
 	while($row=mysqli_fetch_array($qry))
 	{
 			$uid=$row['id'];
 			$uname=$row['uname'];
 			$upass=$row['upass'];
 			$uemail=$row['uemail'];
 			$ustatus=$row['ustatus'];
 	}
 	echo "<form method=post action=''>";
 	echo "<input type='hidden' value=$uid name='uid'>";
 	echo "<input type='text' value=$uname name='uname'>

 	<span class='error'><?php echo $nameuErr;?></span>
 	<br>";
 	echo "<input type='text'  name='upass'><br>";
 	echo "<input type='text'  value=$uemail name='uemail'>
<span class='error'><?php echo $nameuErr;?></span>
 	<br>";
 	echo "<input type='text'  value=$ustatus name='ustatus'><br>";
 	echo "<input type='submit' name='submit' value='Update'>";
 	echo "</form>";
 }


 function updateUser($idu, $nameu, $emailu, $passu, $statusu){
if(empty($passu))
{	
	 $sql="UPDATE users 
 	 	SET uname='$nameu', uemail='$emailu', ustatus='$statusu' 
 	 WHERE id=$idu";
}

else
{
	 $sql="UPDATE users 
 	 	SET uname='$nameu', upass='$passu', uemail='$emailu', ustatus='$statusu' 
 	 WHERE id=$idu";
}
 	
 	include('connection.php');
 	$qry=mysqli_query($conn, $sql);

 	if($qry)
 	{
 		header('Location: dashboard.php');
 	}


 	

 }

?>