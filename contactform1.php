<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$number = $_POST['number'];
$company = $_POST['company'];
$category = $_POST['category'];
// $message = $_POST['message'];

$delegate_price = $_POST['delegate_price'];
$nomination_price = $_POST['nomination_price'];

/* FILE UPLOAD */
$fileName = $_FILES['attachment']['name'];
$tmpName = $_FILES['attachment']['tmp_name'];
$uploadPath = "uploads/" . basename($fileName);

if(!empty($fileName)){
    move_uploaded_file($tmpName, $uploadPath);
}

/* EMAIL */
$to = "jasmit@empireforums.in";
$subject = "2nd Edition CFO NEXTGEN Summit & Awards 2026,20th May - Nomination";

$body = "
Name: $name
Designation: $designation
Email: $email
Number: $number
Company: $company
Category: $category

Delegate Fee: $delegate_price
Nomination Fee: $nomination_price


";

/* HEADERS */
$headers = "From: noreply@empireforums.in\r\n";
$headers .= "Reply-To: $email\r\n";

/* SEND MAIL */
mail($to, $subject, $body, $headers);

/* REDIRECT */
header("Location: success.html");
exit();

}
?>