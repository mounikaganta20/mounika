<?php
session_start();

if(empty($_SESSION['username']))
{
	header("Location:form.php");
}

echo "Hi";
echo $_SESSION['username'];


if(isset($_POST['logout']))
{
	session_destroy();
	header("Location:form.php");
}


?>


<html>
<form action="" method="post">


	<button name="logout">Logout</button>
</form>
</html>