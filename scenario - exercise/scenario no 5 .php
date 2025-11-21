<?php
$conn = mysqli_connect("localhost","root","","class_db"); 
$email = $_POST['emial']; // Problem: Undefined index dahil typo 'emial'; Fix: dapat $_POST['email'] para tumugma sa form field
$sql = "SELECT * FROM students WHERE email='$email'"; 
$res = mysqli_query($conn, $sql); 
?>
