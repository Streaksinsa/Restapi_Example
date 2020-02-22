<?php
// show error reporting
error_reporting(E_ALL);

// set your default time-zone
date_default_timezone_set('Asia/Manila');

// variables used for jwt
$key = "example_key";
$iss = "https://www.sonlabdogok.com";
$aud = "https://www.sonlabdogok.com";
$iat = 1356999524;
$nbf = 1357000000;
?>
