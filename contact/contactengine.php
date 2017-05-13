<?php

$EmailFrom = "TEST";
$EmailTo = "dndgroup@daum.net";
$Subject = "From website";
//$Name = Trim(stripslashes($_POST['Name']));
//$Email = Trim(stripslashes($_POST['Email']));
//$Message = Trim(stripslashes($_POST['Message']));
$Name = trim(stripslashes('jang'));
$Email = trim(stripslashes('dndgroup@daum.net'));
$Message = trim(stripslashes('kkkk'));

error_log(print_r($_POST, true));
error_log(print_r($Name, true));
error_log(print_r($Email, true));
error_log(print_r($Message, true));
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
//$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
// redirect to success page
if ($success){
  error_log('sucess');
//  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://dndgroup.kr/controlls/contact\">";
}
else{
  error_log('fail');
//  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>