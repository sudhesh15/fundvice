<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$sector=$_POST['sector'];
$ticket=$_POST['ticket'];
$investor=$_POST['investor'];

$to='corporate@fundvice.in';
$subject='Investor Form Submission';
$message="Name :".$name."\n"."Phone :".$number."\n"."Sector for investment:"."\n".$sector."\n"."Ticket size:"."\n".$ticket."\n"."Type of investor:"."\n".$investor;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
echo "<center><h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1><a href=investor.html style=text-decoration:none><h1>Back to Contact us</h1></a></center>";
}
else{
echo "Something went wrong!";
}
}
?>
