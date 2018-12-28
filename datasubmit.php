<?php
require ('add.php');

$q11 =  "CREATE TABLE IF NOT EXISTS example(name VARCHAR(20),pass VARCHAR(50))"; 


if (mysqli_query($conn, $q11)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$username =$_POST['uname'];
$password=$_POST['pass'];

if (($username !=NULL) AND ($password !=NULL))
{

	$query ="INSERT INTO example (name,pass) VALUES ('$username','$password')";
	$result =mysqli_query($conn,$query);
}
else
{
	echo "username or password is empty";
}










?>