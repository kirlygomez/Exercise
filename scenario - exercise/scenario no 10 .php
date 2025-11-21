<?php
$age = $_POST['age']; // Problem: Undefined index if no form submitted; Fix: use isset($_POST['age']) to be safe

$sql = "SELECT * FROM students WHERE age = $aeg"; // Problem: Undefined siya kaya variable $aeg; Fix: use correct variable $age

?>
