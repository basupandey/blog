<?php
include('inc_session.php');
include('functions.php');

$name=$_SESSION['name'];
echo "<h2>Welcome $name<h2>";

echo "<p align=right><a href='logout.php'>Logout</a><hr>";

echo "<br>Dahsboard";

echo "<hr>";
echo "<table cellpadding=5 cellspacing=5>";
echo "<thead>";
echo "<tr><td>UID</td><td>User Name</td><td>Password</td><td>Email</td><td>Status</td><td></td></tr>
</thead>";

echo "<tfoot>";
echo "<tr><td>UID</td><td>User Name</td><td>Password</td><td>Email</td><td>Status</td><td></td></tr>
</foot>";

echo "<tbody>";

$sql="SELECT * FROM users ORDER BY id DESC";

include('connection.php');

$qry=mysqli_query($conn, $sql);

//Displaying all Data 
while($row=mysqli_fetch_array($qry))

{
	echo "<tr>";
	echo "<td>". $row['id'] ."</td>";
	echo "<td>". $row['uname'] ."</td>";
	echo "<td>". $row['upass'] ."</td>";
	echo "<td>". $row['uemail'] ."</td>";
	echo "<td>". $row['ustatus'] ."</td>";
	echo "<td><a href='editdelete.php?id=".$row['id']."&&action=edit'>Edit</a> | <a href='editdelete.php?id=".$row['id']."&&action=delete'>Delete</a></td>";
	echo "</tr>";
}


echo "</tbody></table>";


?>