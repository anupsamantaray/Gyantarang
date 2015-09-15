<?php
session_start();
include '../connection.php';
if(!isset($_SESSION['login_user'])){
	header("location:../index.php?errlm=You have to Login first.");
}


if(isset($_REQUEST['name']) and $_REQUEST['name']=="donator"){
	if(isset($_REQUEST['id'])){
		$delId=$_REQUEST['id'];
		$resul= "Select * from donaters WHERE Id='".$delId."'";
		$rs=mysql_query($resul);
		$fetch=mysql_fetch_assoc($rs);
		$image=$fetch['Filename'];
		if($image!=''){
			$link="../donaters/".$image;
			//$thum="../uploadCompanyImage/image/image_".$image;
			unlink($link);
			//unlink($thum);
		}
		mysql_query("DELETE FROM  donaters WHERE Id='".$delId."'");
		$errorData="Request deleted successfully.";
	}
} 
header("location:../donatersadd.php");

if(isset($_REQUEST['name']) and $_REQUEST['name']=="scholarship"){
	if(isset($_REQUEST['id'])){
		$delId=$_REQUEST['id'];
		$resul= "Select * from scholarship WHERE Id='".$delId."'";
		$rs=mysql_query($resul);
		$fetch=mysql_fetch_assoc($rs);
		$image=$fetch['Filename'];
		if($image!=''){
			$link="../students/".$image;
			//$thum="../uploadCompanyImage/image/image_".$image;
			unlink($link);
			//unlink($thum);
		}
		mysql_query("DELETE FROM  scholarship WHERE Id='".$delId."'");
		$errorData="Request deleted successfully.";
	}
} 
header("location:../donatersadd.php");
?>

