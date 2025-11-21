<?php
$conn = mysqli_connect("localhost","root","","class_db"); 
$age = $_GET['age']; //  Risk: Undefined index if 'age' is not in URL; Fix: use isset($_GET['age']) para safe
$sql = "SELECT * FROM students WHERE age = $age"; //  Risk: SQL injection! User pwedeng mag-enter ng '1 OR 1=1' to get all records;  Fix: use prepared statements instead
$res = mysqli_query($conn, $sql); 
?>
