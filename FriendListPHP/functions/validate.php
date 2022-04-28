<?php
if(empty($email))
{
	$msg_error.="<p>Please enter your email to register.</p>";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
	$msg_error .= "<p>The email that you entered is invalid<p>";
}
if(empty($Pname))
{
	$msg_error.="<p>Please enter your Profile Name to register</p>";
}
else if(!preg_match("/^[a-zA-Z ]*$/",$Pname))
{
	$msg_error.="<p>Please enter your profile name with only letters and no spaces.</p>";
}

if(empty($Ipassword))
{
	$msg_error.="<p>Please enter your password to register</p>";
}
else if(empty($Cpassword))
{
	$msg_error.="<p>Please enter your confirmation password to register</p>";
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$Ipassword)||!preg_match("/^[a-zA-Z0-9]*$/",$Cpassword))
{
	$msg_error.="<p>Please enter your password with only letters and numbers.</p>";
}
else if(!($Ipassword==$Cpassword))
{
	$msg_error.="<p>Please have both password and confirm password match each other.</p>";
}

?>