
<!DOCTYPE html>
<?php
// including the database connection file
include_once("config.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM admin WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id=$res['id'];
    $urname = $res['urname'];
	$email = $res['email'];
	$pass = $res['pass'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
body{
    font-size: 180%;
    background-color: skyblue;
}
</style>
<body>
	<a href="dashboard.php"><b>Admin Dashboard</a>
	<br><br>
	
	<form name="form1" method="post" action="update.php">
		<table border="0">
			<tr>
				<td><b>Name :</b></td>
				<td><input type="text" name="urname" value="<?php echo $urname;?>"></td>
			</tr>
			<tr>
				<td><b>Email :</b></td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
		<tr> 
				<td><b>Password :</b></td>
				<td><input type="text" name="pass" value="<?php echo $pass;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
