<?php
$conn = mysqli_connect("localhost","root","","class_db"); // okay, pero dapat may check kung successful ang connection para maiwasan errors

$res = mysqli_query($conn,"SELECT * FROM students"); // okay, pero dapat i-check if query succeeded: if(!$res){ echo mysqli_error($conn); }

$row = mysqli_fetch_assoc($res); // Problem: only fetches first record; Fix: use while loop to iterate all rows

echo $row['email']; // prints only the first email; Fix: put inside while loop like while($row = mysqli_fetch_assoc($res)){ echo $row['email']; }
?>
