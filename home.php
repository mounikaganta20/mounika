<?php

session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "my"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.html');

}


$now=time();

if($now>$_SESSION['expire'])
{
     session_destroy();
    header('Location: index.html');
}

   
// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Welcome to Homepage</h1>
        <?php
        echo  "Hi ".$_SESSION['uname'];
       
       
        ?>

        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>