<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

	<form method="post" action="next.php">
		name:<input type="text" name="name">
		ID:<input type="text" name="id">

		<input type="submit" name="submit">
	</form>
	<a href="next.php"> next</a>


</body>
</html>