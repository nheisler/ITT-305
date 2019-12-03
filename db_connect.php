<?php
//Four variables to connect to database
$host = "localhost";
$username = "root";
$user_pass = "password";
$database_in_use = "test";

//create a database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

?>