<?php

require('dbinit.php');

$email = htmlspecialchars(filter_var(json_decode($_POST['email'], true), FILTER_SANITIZE_EMAIL));
$remote_addr = htmlspecialchars(filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP));
$http_x_forwarded_for = htmlspecialchars(filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP));

if(!empty($email)) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo 'fail';
	} else {
		update_db("insert into email (email_email, email_remote_addr, email_http_x_forwarded_for) values ('$email', '$remote_addr', '$http_x_forwarded_for')");
	}
}

echo json_encode([$email]);
?>
