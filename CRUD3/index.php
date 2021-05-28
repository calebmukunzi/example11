<?php
require_once 'dbconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<style type="text/css">
		
	</style>
</head>
<body bgcolor="skyblue">
	<fieldset>
		<form action="save.php" method="post">
			<table border="1">
				<tr>
					<td>Enter Firstname</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Enter Lastname</td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>Enter Contact</td>
					<td><input type="text" name="contact"></td>
				</tr>
				<tr>
					<td>Enter Department</td>
					<td><input type="text" name="department"></td>
				</tr>
				<tr>
					<td><button type="submit">Register</button></td>
					<td><button type="reset">RESET</button></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>