<?php
include "includes/session.php";
include "includes/DB.php";
include "includes/class.smtp.php";
include "includes/class.phpmailer.php";

if($_POST['action']=="SUBMIT"){

	$name = htmlentities($_POST['name']);
	$email_id = htmlentities($_POST['email_id']);
	$contactnum = htmlentities($_POST['contactnum']);
	$subject = htmlentities($_POST['subject']);
	$message = htmlentities($_POST['message']);
	
	$str =  '<table width="540" border="0" cellspacing="0" cellpadding="0" style="border:5px solid #00448d;padding:20px">
	<tbody>
		<tr>
			<td align="left" valign="top">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td width="293" align="center" valign="middle"><img src="images/logo.png" class="CToWUd"></td></tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr><td align="left" valign="top">&nbsp;</td></tr>	
		<tr><td align="left" valign="top" style="border-top:2px solid #ccc">&nbsp;</td></tr>
		<tr><td align="left" valign="top" style="font-family:Arial;font-size:16px;font-weight:bold;color:#00448d">Get In Touch Form</td></tr>
		<tr><td height="30" align="left" valign="top"></td></tr>
		<tr>
			<td align="center" valign="top">
				<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
					<tbody>
						
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Name</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$name.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Email ID</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a"><a href="mailto:'.$email_id.'" target="_blank">'.$email_id.'</a></span></td></span></td>
				
						</tr>
						
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Mobile Number</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$contactnum.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Subject</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$subject.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Message</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$message.'</span></td>
				
						</tr>
						
					</tbody></table>    
				</td>
			</tr>
			
		</tbody></table>';
		
	$mail = new PHPMailer();
	$mail->IsMail();
	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	$mail->From = ($email_id);
	$mail->FromName = ($name);
	$mail->AddAddress("varaprasadm@gmail.com");
    $mail->AddAddress("varaprasad@zasyaonline.com");
    $mail->AddAddress("info@zasya.online");
	$mail->Subject = "Zasya Contact Form";
	$mail->Body = $str;
	$sent=$mail->Send();
	if($sent){
		$_SESSION['mag'] = 'SUC';
		header("Location:thankyou.php");
		exit();
	}else{
		echo $_SESSION['mag'] = 'ERR';
		header("Location:thankyou.php");
		exit();
	}	
	
}
if($_POST['action_caree']=="Resourcing"){

	$name = htmlentities($_POST['name']);
	$email_id = htmlentities($_POST['email_id']);
	$contactnum = htmlentities($_POST['contactnum']);
	$subject = htmlentities($_POST['subject']);
	$message = htmlentities($_POST['message']);
	
	$applicantresume = $_FILES['uploadDocument']['name'];
	$file_size = $_FILES['uploadDocument']['size'];
	$file_tmp = $_FILES['uploadDocument']['tmp_name'];
	$dest="resumes_upload/".$applicantresume;
	move_uploaded_file ($file_tmp,$dest);
	
	
	$str =  '<table width="540" border="0" cellspacing="0" cellpadding="0" style="border:5px solid #00448d;padding:20px">
	<tbody>
		<tr>
			<td align="left" valign="top">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td width="293" align="center" valign="middle"><img src="https://psmprojects.net/zasya/php/images/logo.png" class="CToWUd"></td></tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr><td align="left" valign="top">&nbsp;</td></tr>	
		<tr><td align="left" valign="top" style="border-top:2px solid #ccc">&nbsp;</td></tr>
		<tr><td align="left" valign="top" style="font-family:Arial;font-size:16px;font-weight:bold;color:#00448d">Get In Touch Form</td></tr>
		<tr><td height="30" align="left" valign="top"></td></tr>
		<tr>
			<td align="center" valign="top">
				<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
					<tbody>
						
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Name</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$name.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Email ID</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a"><a href="mailto:'.$email_id.'" target="_blank">'.$email_id.'</a></span></td></span></td>
				
						</tr>
						
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Mobile Number</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$contactnum.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Subject</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$subject.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">Message</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><span style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$message.'</span></td>
				
						</tr>
						<tr> <td>&nbsp;</td></tr>
						<tr>
							<td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:#42515a">CV</td>
							<td width="10" align="left" valign="top">:</td>
							<td align="left" valign="top"><a target="_blank" href="https://psmprojects.net/zasya/php/resumes_upload/'.$applicantresume.'" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#42515a">'.$applicantresume.'</span></td>
				
						</tr>
						
					</tbody></table>    
				</td>
			</tr>
			
		</tbody></table>';
	$mail = new PHPMailer();
	$mail->IsMail();
	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	$mail->From = ($email_id);
	$mail->FromName = ($name);
	$mail->AddAddress("varaprasadm@gmail.com");
    $mail->AddAddress("varaprasad@zasyaonline.com");
    $mail->AddAddress("info@zasya.online");
	$mail->Subject = "Zasya Contact Form";
	$mail->Body = $str;
	$sent=$mail->Send();
	if($sent){ 
				
		$query ="INSERT INTO `applicant_details`(`applicant_name`, `applicant_email`, `applicant_contact`, `applicant_subject`, `applicant_message`, `resume`, `addedOn`) VALUES ('{$name}','{$email_id}','{$contactnum}','{$subject}','{$message}','{$applicantresume}',Now())";
		$res=mysqli_query($conn,$query);
		
		$_SESSION['mag'] = 'SUC';
		header("Location:thankyou.php");
		exit();
	 }else{
		echo $_SESSION['mag'] = 'ERR';
		header("Location:thankyou.php");
		exit();
	}	 
	
}



?>
