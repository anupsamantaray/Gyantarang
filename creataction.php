<?php
session_start();
include_once('function.php');
if(isset($_POST['Login'])){
	$email=htmlentities($_REQUEST['usremail']);
    $pass=htmlentities($_REQUEST['usrpass']);
	if(($email != "") && ($pass != "")){
		$fetch = mysql_query("select * from `login` where `email`='$email' AND `password`='$pass'") or die(mysql_error());
		$reslt = mysql_num_rows($fetch);
		if($reslt>0){
			$err = 'You have successfully logged in.';
			$res = mysql_fetch_assoc($fetch);
			$fnameusr = explode(' ',$res['name']);
			$_SESSION['name']=$fnameusr[0];
			$_SESSION['email']=$res['email'];
			$_SESSION['slno']=$res['slno'];
			$_SESSION['class']=$res['class'];
		}else{
			$err = 'Email and password does not matched. Please try again.';
		}
		//echo "<script>location.href=index.php?err=$err</script>";
		header("location:index.php?err=$err");
	}
}

if(isset($_POST['Register'])){
    $name=htmlentities($_REQUEST['usrname']);
    $class=htmlentities($_REQUEST['usrclass']);
    $phone=htmlentities($_REQUEST['usrcontact']);
    $email=htmlentities($_REQUEST['usremail']);
    $pass=htmlentities($_REQUEST['usrpass']);
    $confirm=htmlentities($_REQUEST['usrcpass']);
     $school=htmlentities($_REQUEST['usrschool']);
      $city=htmlentities($_REQUEST['usrcity']);
   
    if($name != "" && $phone != "" && $email != "" &&  $pass == $confirm)
    {
     $fet=mysql_query("select * from `login` where `email`='$email'")or die(mysql_error());
     $res=mysql_num_rows($fet);
    if($res==0)
    {
		if(!empty($_FILES['fileToUpload']))
		{
			mkdir("propic/".$_POST['usremail']);
			$target_dir = "propic/".$_POST['usremail']."/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			//echo($target_file);
			
			mysql_query("insert into `login` set `name`='$name',`class`='$class', `phone`='$phone',  `password`='$pass', `email`='$email',`school`='$school',`city`='$city',`pro_pic`='$target_file'") or die(mysql_error());
		}
		else
		{
			mysql_query("insert into `login` set `name`='$name',`class`='$class', `phone`='$phone',  `password`='$pass', `email`='$email',`school`='$school',`city`='$city'") or die(mysql_error());
		}
        //echo "insert into `login` set `name`='$name',`class`='$class', `phone`='$phone',  `password`='$pass', `email`='$email'";
        //mysql_query("insert into `login` set `name`='$name',`class`='$class', `phone`='$phone',  `password`='$pass', `email`='$email',`school`='$school',`city`='$city',`pro_pic`='".$target_file."'") or die(mysql_error());
		$err="Your new account has been successfully created!";
		$message="Thank you for register in quiz\n"."Your email is= ".$email."\nYour password is= ".$pass;
	       $subject="Congratulation Mail";
	       $from="anup.bapu@gmail.com";
	       //$from="noreply@gyantarang.co.in";
                /*mail($email,$subject,$message,"From: $from\n");*/ //open to send mail
    }
    else{
	 $err="An account already exists with the same email address. Login or create an account with another email address.";
	}
    }else{ 
		$err="Enter correct password";
	}
    header("location:index.php?err=$err");
	//echo "<script>location.href=index.php?err=$err</script>";
}
?>