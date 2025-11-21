<?php
$newEmail = $_POST['email']; // Problem: Undefined index if form not submitted; Fix: use isset($_POST['email']) to be safe

$sql = "UPDATE students SET email='$newEmail'"; // yung Problem: updates ALL rows; Fix: add WHERE clause to target specific record, e.g., WHERE id=...

mysqli_query($conn,$sql); // okay naman neto, pero dapat i-check if query succeeded: if(!$res){ echo mysqli_error($conn); }
?>
