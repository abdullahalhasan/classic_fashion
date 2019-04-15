<?php
// connect to the database
$db = mysqli_connect("localhost", "root", "", "classic_db");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";
?>