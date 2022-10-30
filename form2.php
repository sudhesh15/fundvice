<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$company=$_POST['company'];
$fund=$_POST['fund'];
$funding=$_POST['funding'];
$long=$_POST['long'];
$revenue=$_POST['revenue'];
$upload=$_POST['upload'];
$drive=$_POST['drive'];

$to='corporate@fundvice.in';
$subject='Startup Form Submission';
$message="Name :".$name."\n"."Phone :".$number."\n"."email:"."\n".$email."\n"."Name of the company:"."\n".$company."\n"."Funding required:"."\n".$fund."\n"."Round of Funding"."\n".$funding."\n"."How long it had been in operation"."\n".$long."\n"."Amount of revenue generated"."\n".$revenue."\n"."Upload"."\n".$upload."\n"."Google drive link"."\n".$drive;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
echo "<center><h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1><a href=startup.html style=text-decoration:none><h1>Back to Contact us</h1></a></center>";
}
else{
echo "Something went wrong!";
}
}
?>
