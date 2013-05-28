<?php 
session_start();
if($_SESSION['username'])
{
	echo "welcome, ".$_SESSION['username']."! <a href='logout.php'> Click</a> here to logout!";
}
else
	die("you must be logged in");
?>
