<?php
$page = $_GET['page']; // Problem: Undefined index if no page in URL; Fix: use isset($_GET['page']) or default to 0
$limit = 5;
$offset = $page * $limit; // Risk: user can enter huge page number and crash MySQL; Fix: validate page number and restrict max value

$sql = "SELECT * FROM students LIMIT $offset, $limit"; // okay, but should ensure $offset is non-negative and within reasonable range
?>

