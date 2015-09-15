<?php
session_start(); // Starting Session
if(!isset($_SESSION['login_user']))
{header("location:../index.php?errlm=You have to Login first.");}

include '../connection.php';

//This is the directory where images will be saved
$target = "../students/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$Dname=$_POST['Sname'];
$Message=$_POST['Message'];
$Id=$_POST['id'];


//Writes the Filename to the server
if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {

	mysql_query("UPDATE `scholarship` SET `Sname`='$Dname',`Message`='$Message',`Filename`='$Filename' WHERE	`Id`='$Id'");
	
	 echo "Record Updated Successfully";
	
} 
else
{
    
	mysql_query("UPDATE `scholarship` SET `Sname`='$Dname',`Message`='$Message' WHERE `Id`='$Id'");
    echo "Record Updated Successfully.";
}

?>