<?php

$servername = "localhost";
$username = "root"; 
$password = "pass"; 
$dbname = "file_management"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

}
?>