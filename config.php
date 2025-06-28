<?php
$servername = "localhost";
$username = "";
$password = "";
$database = "tasksDB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connection_error){
    die("Connection failed: ". $conn->connection_error);
}

echo "Connected sucessfully";
?>