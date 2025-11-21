<?php
$conn = mysqli_connect("localhost","root","","class_db"); // okay, pero dapat may connection check to ensure the database connected properly

$sql = "DELETE FROM students WHERE id = " . $_GET['id']; // Risk: direct use of $_GET allows SQL injection like ?id=0 OR 1=1; Fix: use intval($_GET['id']) or prepared statements for secure deletion

mysqli_query($conn, $sql); 
?>
