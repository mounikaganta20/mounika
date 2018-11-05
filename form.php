
<?php
session_start();

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$dbuser='admin';
$dbpass='pass';

if($username==$dbuser && $password==$dbpass )
{
	$_SESSION['username']=$username;
	header("Location:welcome.php");
}
else
{
	echo '<script>alert("invalid details");</script>';
}
}

?>







<html>
<form method="post" action="">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>
</html>