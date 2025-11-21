<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
$id = $_POST['id']; // Problem: Undefined index 'id' kung walang POST request;  Fix: gamitin isset() o $_GET para kunin ang id mula sa URL safely
$sql = "SELECT * FROM students WHERE id = $id";
$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);
echo $r['first_name'];
?>
