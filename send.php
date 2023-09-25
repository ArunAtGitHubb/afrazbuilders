<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_to = "jellysoftapp@gmail.com";
    $email_subject = "Enquiry from website";
    $email_from = "enquiry@jellysoft.com";
	$thankyou = "thankyou.php";
	
	function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
	  
    }
	$name = $_POST['name'];
	$phone =$_POST['phone']; 
	$place =$_POST['place'];
	$message = $_POST['message'];
	
	
	$email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Mobile: ".clean_string($phone)."\n";
    $email_message .= "Place: ".clean_string($place)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";
	$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

 

    // 'Reply-To: '.$email_from."\r\n" .
 
    // 'X-Mailer: PHP/' . phpversion();


 
@mail($email_to, $email_subject, $email_message, $headers);  
// echo '<script>alert("Mail sent Successfully")</script>';
header("Location: thankyou.php");
}
?>