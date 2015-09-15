<?php 
//for local host
$servername ="localhost";
$username 	="root";
$password 	="";
$dbname 	="gyantarang";

	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
mysql_connect($servername,$username,$password) or die(mysql_error()) ;
mysql_select_db("gyantarang") or die(mysql_error()) ; 
?>
<?php 
//for server
/* $servername = "gyantarang.db.11063224.hostedresource.com";
$username = "gyantarang";
$password = "Cloud9@gyan";
$dbname = "gyantarang";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
mysql_connect("gyantarang.db.11063224.hostedresource.com", "gyantarang", "Cloud9@gyan") or die(mysql_error()) ;
mysql_select_db("gyantarang") or die(mysql_error()) ; */
?>
