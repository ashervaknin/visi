<?php

$name = $_POST ['name'];

$email_visitor = $_POST ['email'];

$massege = $_POST ['massege'];


$email_from = 'asheriko26@gmail.com';

$email_subject = 'new form submition'


$email_body = "user name : $name.\n".
               "user email : $email_visitor .\n".
			   "user massege : $massege .\n";
			   
			   
$to ="visitorapp99@gmail.com";

$headers = "from : $email_from \r\n";
$headers = "replay to : $email_visitor \r\n";

mail ($to,$email_subjec,$email_body,$headers);

header("location :index.html");




?>