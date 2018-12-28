<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<style>
		.tb_class
		{
			font-family: serif;
			border :3px solid;
			 border-color: skyblue;
			 position: absolute;
			 top: 30%;
			 left: 33.5%;
		}
	</style>
</head>
<body bgcolor="lightgray">
	<div class="tb_class">
	<form action="datasubmit.php" method="POST">
		<table>
			<tr>
				<td>
					<h1 align="center">
					<strong>Sign</strong> Up
					</h1>				
						<input type="text" name="uname" placeholder="Enter Name">
						<br>
						<input type="text" name="pass" placeholder="Enter Password">
						<br>
						<input type="submit" name="" value="Register">
						<br><br>				
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>