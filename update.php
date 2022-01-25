<?php
include_once("config.php");
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($conn, $_POST['id']);
$urname = mysqli_real_escape_string($conn, $_POST['urname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
if(empty($id) || empty($urname) || empty($email) || empty($pass))
{	
if(empty($id)) {
echo '<font color="red">id field is empty.</font><br>';
}
if(empty($urname)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';
}	
if(empty($pass)) {
    echo '<font color="red">Password field is empty.</font><br>';
    }	
} else {	
$result = mysqli_query($conn, "UPDATE admin SET id='$id' , urname='$urname' ,  email='$email' , pass='$pass' WHERE id=$id");
header("Location: display.php");
}
}
?>
