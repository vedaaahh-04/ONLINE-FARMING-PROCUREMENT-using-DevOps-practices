<?php
	session_start();
	$con = mysqli_connect("localhost","root","","veda");
	if($con===false)
		die("CONNECTION FAILED".mysqli_connect_error());
	$uname = $_SESSION['uname'];
	$item  = $_POST['course'];
	$a = "delete from `retailerdata` where `username`='$uname' AND `item`='$item'";
	$result = mysqli_query($con,$a);
	if(($result)==TRUE)
	{
		echo "<script type=\"text/javascript\">
			alert(\"Item deleted successfully \");
		</script>";
		echo "<script> window.location.assign('deleteitem.php'); </script>";
	}
	else{
		echo "<script type=\"text/javascript\">
			alert(\"ERROR...Item not found\");
		</script>";
		echo "<script> window.location.assign('deleteitem.php'); </script>";
	}
?>