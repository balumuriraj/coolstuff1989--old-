<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password)
{
	$connect = mysql_connect('localhost', 'root', '') or die ("could not connect!");
	mysql_select_db("1360416_csv2") or die("could not find DB!");
	
	$query = mysql_query("SELECT * FROM users WHERE username = '$username'");
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0)
	{
		while($rows = mysql_fetch_assoc($query))
		{
			$dbusername = $rows['username'];
			$dbpassword = $rows['password'];
		}
		if($username==$dbusername&&$password==$dbpassword)
		{
			echo "you are in! <a href='test.php'> Click</a> here to enter!";
			$_SESSION['username'] = $dbusername;
		}
		else
			echo "incorrect password";
	}
	else
		die("user do not exist!");
}
else 
	die("Please enter valid username and password!");

?>