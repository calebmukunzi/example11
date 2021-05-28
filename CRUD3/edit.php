<?php
require_once 'dbconnection.php';
if ($_GET['id'])
 {
	$ID=$_GET['id'];
	$sql="SELECT *FROM employee where id='$ID'";
	$result=$conn->query($sql);
	$data=$result->fetch_assoc();

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
		<form action="update.php" method="post">
			<table border="1">
				<tr>
					<td>Enter Firstname</td>
					<td><input type="text" name="fname" value="<?php echo $data['Fname']?> " /></td>
				</tr>
				<tr>
					<td>Enter Lastname</td>
					<td><input type="text" name="lname" value="<?php echo $data['Lname']?>"></td>
				</tr>
				<tr>
					<td>Enter Contact</td>
					<td><input type="text" name="contact" value="<?php echo $data['Contact']?>"></td>
				</tr>
				<tr>
					<td>Enter Department</td>
					<td><input type="text" name="department" value="<?php echo $data['Department']?>"></td>
				</tr>
				<tr>
					<td><button type="submit">UPDATE</button></td>
					<td></td>
				</tr>
				<tr>
					
					<td><input type="hidden" name="IDI" value="<?php echo $data['id']?>"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>
<?php
}

?>