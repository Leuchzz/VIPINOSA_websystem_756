<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vipinosa_websystem_756";

$conn = new mysqli($servername, $username, $password, $database); // Added missing semicolon

if ($conn->connect_error) {
    die("Connection Failed!: " . $conn->connect_error);
}
?>