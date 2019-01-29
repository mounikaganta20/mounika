<?php

session_start();


$username='admin';

$_SESSION['username']=$username;


echo $_SESSION['username'];

session_destroy();


echo "welcome";







?>
