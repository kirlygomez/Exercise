<?php
$id = $_POST['id']; // Problem: Undefined index because link sends GET, not POST; Fix: use $_GET['id'] instead

?>
<a href="view.php?id=3">View Student</a> <!-- okay, link is fine, but PHP must read $_GET['id'] -->
