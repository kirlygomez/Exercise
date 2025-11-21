<?php
$conn = mysqli_connect("localhost","root","","class_db"); 
$first = $_POST['fname']; //  Undefined index kung walang form submission;  Fix: use isset($_POST['fname']) para safe
$last = $_POST['lname']; //  Undefined index kung walang form submission; Fix: use isset($_POST['lname']) para safe
$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first','$last')"; //  Risk: Blank rows kung walang validation & SQL injection risk; Fix: check muna kung hindi empty and/or use prepared statements
mysqli_query($conn, $sql); 
echo "Inserted!"; 
