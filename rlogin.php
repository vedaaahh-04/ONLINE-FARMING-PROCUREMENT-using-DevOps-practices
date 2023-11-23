<?php
	session_start();
	$uname = $_POST['runame'];
	$password = $_POST['rpwd'];
	$con = mysqli_connect("localhost","root","","veda");
	if($con==false){
		die("connection failed".mysqli_connect_error());
	}
	else{
		$stmt = $con->prepare("select * from retailers where runame = ?");
		$stmt->bind_param("s",$uname);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['rpassword'] === $password){
				$_SESSION['uname'] = $uname;
				echo "<script> window.location.assign('retailerA.php'); </script>";
			}
			else{
				echo "<script type=\"text/javascript\">
						alert(\"Invalid username or password !!!\");
					</script>";
				echo "<script> window.location.assign('loginR.html'); </script>";	
			}
		}
		else{
			echo "<script type=\"text/javascript\">
					alert(\"Invalid username or password !!!\");
				</script>";
			echo "<script> window.location.assign('loginR.html'); </script>";	
		}
	}

?>