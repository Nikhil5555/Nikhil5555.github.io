<?php
$x=$_POST['username'];
$y=$_POST['email'];
$z=$_POST['msg'];
$to="nikhil.18beceg012@gmail.com";
$subject="Response from website";
$header="From: $y";
if(mail($to,$subject,$z,$header)){
echo "Sent Successfully! Thank you $x for contacting us, we will reply you shortly.";
}
else{
    echo "failed to send";
}
$con=mysqli_connect('43.252.88.96','nikhilkh_nikhilkhem40','@nikhil5');
mysqli_select_db($con,'nikhilkh_db3');
$q="insert into user (username,email,msg) values ('$x','$y','$z')";
mysqli_query($con,$q);
mysqli_close($con);
?>
