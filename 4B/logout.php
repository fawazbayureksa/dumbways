<?php
	session_start();
	session_unset();
 	echo "<script type='text/javascript'>alert('Logout User Successfully')</script>";
	echo "<script>location='login.php'</script>";
 ?>
