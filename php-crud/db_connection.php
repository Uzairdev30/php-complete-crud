<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "php_crud_example_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
