<?php
session_start(); // Starting Session

$Email=$_POST['Email'];
$Password=$_POST['Password'];
// Establishing Connection with Server
//$connection = mysql_connect("gyantarang.db.11063224.hostedresource.com", "gyantarang", "Cloud9@gyan");
// connect local
$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("gyantarang", $connection);

$query = mysql_query("select * from admin where Password='$Password' AND Email='$Email'", $connection);
$rows = mysql_num_rows($query);
	if ($rows == 1) {
		$_SESSION['login_user']=$Email; // Initializing Session
		header("location: donatersadd.php"); // Redirecting To Other Page
	} 
	else {
	echo
		"<SCRIPT type='text/javascript'> //not showing me this
			alert('Invalid Email Id And Passsword');
			window.location.href='login.php';
		</SCRIPT>";
	}
	mysql_close($connection); // Closing Connection
?>