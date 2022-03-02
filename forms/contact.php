<?php
session_start();

// *** We need to make sure theyre coming from a posted form -
//	If not, quit now ***
if ($_SERVER["REQUEST_METHOD"] <> "POST")
	die("You can only reach this page by posting from the html form");

// *** The text input will come in through the variable $_POST["captcha_input"],
//	while the correct answer is stored in the cookie $_COOKIE["pass"] ***
if ($_POST["captcha_input"] == $_SESSION["pass"])
{
$headers  .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


$Name=$_POST['txtName'];
$email=$_POST['txtEmail'];
$SubjectText=$_POST['textSubject'];
$MessageText=$_POST['txtMessage'];



$query="<table>
<tr><td>Name</td><td>$Name</td></tr>
<tr><td>Email</td><td>$email</td></tr>
<tr><td>Requirement</td><td>$SubjectText</td></tr>
<tr><td>Address</td><td>$MessageText</td></tr>
</table>";


$address="dkb1985@gmail.com";
$subject="Enquiry from website Contact form";
$body=$query;
$mailsend=mail($address,$subject,$body,$headers);
?>
