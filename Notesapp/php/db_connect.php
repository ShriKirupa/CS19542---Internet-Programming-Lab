<?php
$servername = "localhost";
$username = "root";
$password = "Sri@22Ram@11";
$dbname = "code_saver_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
