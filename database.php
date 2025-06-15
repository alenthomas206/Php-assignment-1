<?php
$host = 'localhost';
$user = 'Alen200627098';
$password = 'nRqhLDdm4Y';
$db = 'Alen200627098';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
