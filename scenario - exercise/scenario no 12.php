<?php
$id = $_GET['id']; // Problem: Undefined index if no id in URL; Fix: use isset($_GET['id']) to be safe

$sql = "SELECT * FROM students WHERE id = '$id'"; // Problem: id is integer, quotes not needed; Fix: cast to int like (int)$id or remove quotes for efficiency
?>
