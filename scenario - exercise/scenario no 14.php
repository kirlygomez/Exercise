<?php
$data = $_POST; // Problem: Undefined index if form not submitted; Fix: use isset($data['first_name']) etc. to be safe

$sql = "INSERT INTO students (first_name, last_name, email) 
VALUES ($data[first_name], $data[last_name], $data[email])"; // Problem: yung missing quotes around string values ay incorrect array indexing; 
// Fix: use '$data[first_name]' or better use $data['first_name'] with quotes
?>
