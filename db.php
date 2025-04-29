<?php
$conn = new mysqli("localhost", "root", "root2", "netflix_clone", 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>