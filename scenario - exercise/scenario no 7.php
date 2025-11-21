<?php
$conn = mysqli_connect("localhost","root","","class_db"); 

$id = $_POST['id']; // Problem: Undefined index kung walang POST submission; Fix: use isset($_POST['id']) para safe
$email = $_POST['email']; // Problem: Undefined index kung walang POST submission; Fix: use isset($_POST['email']) para safe

$sql = "UPDATE students SET email=$email WHERE id=$id"; // Problem: missing quotes around email causing SQL error; Fix: use '$email' or prepared statements to secure query

$res = mysqli_query($conn, $sql); 

echo "Updated!"; 
?>
