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

$uname = mysqli_real_escape_string($con,$_REQUEST['username']);
$password = mysqli_real_escape_string($con,$_REQUEST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        
        header("Location:home.php");
        
        
        
    }else{
        echo "invalid";
    }

}


?>