<?php
$x=$_POST['username'];
$y=$_POST['email'];
$z=$_POST['msg'];
$subject="Response from website";
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail=new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug=1;
$mail ->SMTPAuth=true;
$mail ->SMTPSecure='ssl';
$mail ->Host="smpt.gmail.com";
$mail ->Port=465;
$mail ->IsHTML(TRUE);
$mail ->Username="nikhil.18beceg012@gmail.com";
$mail ->Password="@notankisala5";
$mail ->Setfrom("nikhil.18beceg012@gmail.com");
$mail ->Subject =$subject;
$mail ->Body=$msg;
$mail ->AddAddress("nikhil.18beceg012@gmail.com");
if(!$mail ->send())
{
  echo "mail not sent";
}
else{
    echo "mail sent successfully";
}
?>