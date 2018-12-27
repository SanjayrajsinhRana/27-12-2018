<?php
require('add.php');
$username=$_POST['uname'];
$password=$_POST['pass'];
$select_uname="select name from example";
$result1 = mysqli_query($conn,$select_uname);
while($row = $result1->fetch_assoc())
{
echo $row["name"];
}

if ($row == $username) {
	echo "user available";
}
else
{
	echo " user not avilable";
}
?>