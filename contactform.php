<?php
//get data from form  
$name = $_POST['name'];
$designation = $_POST['designation'];
$email= $_POST['email'];
$number= $_POST['number'];
$company= $_POST['company'];
$category= $_POST['category'];
$fee = "₹12,500 + GST";

$to = "jasmit@empireforums.in";
$subject = "2nd Edition CFO NEXTGEN Summit & Awards 2026,20th May";
$txt ="Name = ". $name . "\r\n Designation = ". $designation . "\r\n Email = " . $email . "\r\n Number = ". $number . "\r\n Company = ". $company . "\r\n Category = " . $category . "\r\n Fee = " . $fee;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>

