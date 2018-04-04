<?php
// Message vars
$msg = '';
$msgClass = '';
$alert = '';
$err = true;

// check for submit
if(filter_has_var(INPUT_POST, 'submit')) {

  // get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // check required fields
  if(!empty($name) and !empty($email) and !empty($message)) {
    // passed

    // check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      // failed
      $msg = 'Please enter a valid email';
      $msgClass = 'alert-danger';
    } else {
      // passed

      // recipient email
      $toEmail = 'davidmwhynot@gmail.com';
      $subject = 'Contact Request From ' . $name;
      $body = '<h2>Contact Request</h2>
      <h4>Name</h4><p>' . $name . '</p>
      <h4>Email</h4><p>' . $email . '</p>
      <h4>Message</h4><p>' . $message . '</p>
      ';

      // email headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

      // additional headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

      //if(mail($toEmail, $subject, $body, $headers)) {
			if(true) {
				// email sent
        $msg = 'Your email has been sent';
        $msgClass = 'alert-success';
				$err = false;

				$space = strpos($name, ' ');
				if($space) {
					$firstName = substr($name, 0, $space);
				} else {
					$firstName = $name;
				}
      } else {
        // email failed
        $msg = 'Your email was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
		// empty fields
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>
