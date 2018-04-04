<?php

// INPUT ARRAY PARAMS:
// 0 - username
// 1 - password

$loginArray = json_decode($_POST["loginData"], true);
// echo 'we are here';
// var_dump($loginArray);

echo json_encode([$loginArray]);


?>
