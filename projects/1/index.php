<?php

require ("inc/header.php");

if(count($_COOKIE) > 0) {
  $cookie_count = count($_COOKIE);
} else {
  // no cookies
	$cookie_count = 0;
}

if (isset($_COOKIE['username'])) {
	$username = $_COOKIE['username'];
} else {
  $user = '';
}

?>

<video poster="media/img/desk.jpg" id="bgvid" playsinline autoplay muted loop>
	<source src="media/vid/bg.mp4" type="video/mp4">
</video>

<div id="portal_links" class="container card">
	<div class="card-body">
		<p>Use the buttons below to jump to a form.</p>
		<a id="portal_customer_form_button" href="contact.php" class="btn btn-info">Customer Form</a>
		<a id="portal_internal_form_button" href="login.php" class="btn btn-primary">Internal Form</a>
	</div>
</div>

<?php
require ("inc/footer.php");
?>
