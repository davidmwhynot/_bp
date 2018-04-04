<?php


define('ROOT_URL', 'http://localhost/phpsandbox/website8/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'yknot_0');


function hit_db($query) {
	// Create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if(mysqli_connect_errno()) {
	// Connection failed
		echo 'failed to connect to MySQL: ' . mysqli_connect_errno();
		echo '<hr />1<hr />';
	}

	// create query

	// get result
	$result = mysqli_query($conn, $query);
	echo mysqli_error($conn);
	// fetch data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);
	//echo '<hr />11<hr />';
	return $posts;
	// free the result from memory
	mysqli_free_result($result);

	mysqli_close($conn);
}

function update_db($query) {
	// Create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if(mysqli_connect_errno()) {
	// Connection failed
		echo 'failed to connect to MySQL: ' . mysqli_connect_errno();
		echo '<hr />1<hr />';
	}

	// create query

	// get result
	$result = mysqli_query($conn, $query);
	echo mysqli_error($conn);
	// mysqli_free_result($result);

	mysqli_close($conn);
}
?>
