<?php session_start();
if(isset($_POST['Submit'])) {   if( $_SESSION['chapcha_code'] == $_POST['chapcha_code'] && !empty($_SESSION['chapcha_code'] ) ) {
$youremail = 'info@afridistones.com.au';
$fromsubject = 'www.afridistones.com.au';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$company = $_POST['company']; 
$city = $_POST['city']; 
$country = $_POST['country']; 
$phone = $_POST['phone']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'AFRIDI STONES CONTACT EMAIL - FROM '.$fromsubject.'';
	$body = $fromsubject.'
	
	 Email from '.$fname.' '.$lname.'
	 '.$city.', '.$country.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Company: '.$company.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. We will contact you shortly if needed.<br/>Go back to <a href='/contactus.php'>Contact Page</a>"; 
		mail($to, $subject, $body);
		unset($_SESSION['chapcha_code']);
   } else {
		echo 'Sorry, you have provided an invalid security code';
   }
 } else { 
echo "You must write a message. </br> Please go back to <a href='/contactus.php'>Contact Page</a>"; 
}
?> 