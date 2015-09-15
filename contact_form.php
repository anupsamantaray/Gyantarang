<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];


//if($car_frm){
	
	$ToEmail = 'basant.pareek@c9live.com'; 
	$EmailSubject = 'NGO Enquiry'; 
	$mailheader = "From:".$email."\r\n"; 
	$mailheader .= "Reply-To: ".$email."\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	$MESSAGE_BODY = '
		   
			<table cellspacing="0" cellpadding="7" border="1" width="100%">
				<tbody>
					
					<tr>
						<td width="20%" style="text-align:left;"><strong>Name</strong></td>
						<td>'.$name.'</td>
					</tr>
					
					<tr style="background:#fcfcfc;">
						<td style="text-align:left;"><strong>Email</strong></td>
						<td>'.$email.'</td>
					</tr>
					<tr>
						<td style="text-align:left;"><strong>Contact No.</strong></td>
						<td>'.$contact.'</td>
					</tr>
					<tr style="background:#fcfcfc;">
						<td style="text-align:left;"><strong>Message</strong></td>
						<td>'.$message.'</td>
					</tr>
					
				</tbody>
			</table>
	'; 
	//echo $MESSAGE_BODY;
     
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

header("location: index.php");
?>