<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<?php
		session_unset();
		session_destroy();
		echo "<script> window.location.assign('loginF.html'); </script>";
	?>
</body>
</html>