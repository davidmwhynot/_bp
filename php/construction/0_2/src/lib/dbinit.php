<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/david/vendor/PHPMailer/src/Exception.php';
require '/home/david/vendor/PHPMailer/src/PHPMailer.php';
require '/home/david/vendor/PHPMailer/src/SMTP.php';

// config NOTE: get vals from config.sql
define('DB_HOST', 'localhost');
define('DB_USER', 'yknot_1_super');
define('DB_PASS', 'ZAQ!1qazCDE#3edcVFR$4rfv');
define('DB_NAME', 'yknot_1');
$email_send_domain = 'davidwhynot.me';

// request
function hit_db($query) { // TODO: add params to make this an api and construct queries below to prevent sql injection
	// Create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if(mysqli_connect_errno()) {
		// Connection failed
		echo 'failed to connect to MySQL: ' . mysqli_connect_errno();
	}

	// create query
	// TODO

	// get result
	$result = mysqli_query($conn, $query);
	echo mysqli_error($conn);

	// fetch data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free result
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	// notify that a db event occured
	notify_event($query, $result); // TODO: add params

	// return data
	return $posts;
}

function update_db($query) { // TODO: add params to make this an api and construct queries below to prevent sql injection
	// Create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if(mysqli_connect_errno()) {
		// Connection failed
		echo 'failed to connect to MySQL: ' . mysqli_connect_errno();
	}

	// create query
	// TODO

	// get result
	$result = mysqli_query($conn, $query);
	echo mysqli_error($conn);

	// close connection
	mysqli_close($conn);

	// notify that a db event occured
	notify_event($query, $result); // TODO: add params

	// return success/fail
	return $result;
}

function notify_event($query, $result) {
	$mail = new PHPMailer(true);
	try {
		date_default_timezone_set('EST');
		$time = date('l jS \of F Y h:i:s A');
		$body = "
		dbinit.notify_event(query, result)
		query:
		$query
		result:
		$result
		time:
		$time
		end
		";

		$mail->IsSMTP();
		$mail->Host = 'localhost';
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false
			)
		);

		$mail->AddReplyTo('davidmwhynot@gmail.com', 'David Whynot');
		$mail->SetFrom("noreply@davidwhynot.me", 'server (dbinit.notify_event())');
		$mail->AddAddress('davidmwhynot@gmail.com', 'David Whynot');
		$mail->Subject = "yknot notify_event";
		$mail->MsgHTML($body);

		$mail->send();
	} catch(Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}
?>
