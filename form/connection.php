<?php
$dbserver ="localhost";
$dbuser ="root";
$dbname="users";
$con =mysqli_connect($dbserver,$dbuser,$dbname);
if ($con == false) 
{
	echo "connection failed".mysqli_error($con);
}
else
{
	
}
?>