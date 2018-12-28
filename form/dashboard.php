<?php
require ('connection.php');
if (isset($_POST['submit']))
{
	if ($_POST['fname'] == NULL OR $_POST['lname'] == NULL OR $_POST['email'] == NULL OR $_POST['pass'] == NULL OR $_POST['cpass'] == NULL     ) 
	{
	echo "Please enter all information";	
	}
	else
	{

		if ($_POST['pass'] != $_POST['cpass']) 
		{
			
		}
		else
		{

		}



	}
}
else
{
	echo "connection failed".mysqli_error($con);
}
?>