<?php
$conn = mysqli_connect("localhost","root","","class_db"); 
$fname = $_POST['fname']; // Problem: Undefined index 'fname' kung walang POST request;  Fix: gamitin isset() para safe, example: $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$sql = "SELECT * FROM students WHERE first_name = $fname"; //  Problem: Unknown column error & SQL injection risk;  Fix: dapat i-quote ang string or gumamit ng prepared statement, example: WHERE first_name = '$fname'
$res = mysqli_query($conn, $sql); // okay, pero dapat may check kung successful ang query, example: if(!$res){ echo mysqli_error($conn); }
?>
