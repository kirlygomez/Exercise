<?php
$email = $_POST['email']; // Problem: Undefined index because form uses GET; Fix: either change form method="POST" or use $_GET['email'] instead
?>
<form method="GET" action="save.php">
<input name="email">
</form>
