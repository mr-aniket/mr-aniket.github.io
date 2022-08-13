 
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "aniketison@gmail.com";
$subject = "Mail From your website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n phone =" . $phone ."\r\n message =" . $message .;
$headers = "From: noreply@mr-aniket.github.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("./thankyou.html");
?>
