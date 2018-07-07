<?php

$EmailFrom = "info@rockymeadowenterprises.com";
$EmailTo = "info@rockymeadowenterprises.com";
$Subject = "Website Contact Form Submission";
$name = Trim(stripslashes($_POST['fullname'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$email = Trim(stripslashes($_POST['email'])); 
$comments = Trim(stripslashes($_POST['comments'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $comments;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>