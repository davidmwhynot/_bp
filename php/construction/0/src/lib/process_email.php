<?php

require('dbinit.php');

$email = htmlspecialchars(json_decode($_POST["email"], true));

if(!empty($email)) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo 'fail';
	} else {
		update_db("insert into email (email_email, email_ip, email_other) values ('$email', 'ip $email','other $email')");
	}
}

echo json_encode([$email]);
?>
