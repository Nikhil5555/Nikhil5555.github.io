<?php
$x=$_POST['username'];
$y=$_POST['email'];
$z=$_POST['msg'];
$to="nikhi.18beceg012@gmail.com";
$subject="Response from website";
$header="From: $y";
if(mail($to,$subject,$z,$header)){
echo "Sent Successfully! Thank you $x for contacting us, we will reply you shortly.";
}
else{
    echo "failed to send";
}
?>
