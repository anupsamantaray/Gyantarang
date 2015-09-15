<?php
session_start(); // Starting Session
include 'connection.php';

//This is the directory where images will be saved
$target = "donaters/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$Dname=$_POST['Dname'];
$Message=$_POST['Message'];

//Writes the Filename to the server
if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
	mysql_query("INSERT INTO donaters (Dname,Message,Filename)VALUES('$Dname','$Message','$Filename')") ;
	echo 
	"<SCRIPT type='text/javascript'> //not showing me this
        alert('Record Added Successfully');
       window.location.href='donatersadd.php';
    </SCRIPT>";
}
else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}
?>