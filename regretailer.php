<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="in1.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="homepage.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>   home</a></li>
				<li><a href="help.html"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>   help</a></li>
				<li><a href="about.html"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>   about us</a></li>
			</ul>
		</div>
		<div class="content">
			<?php
				$con = mysqli_connect("localhost","root","","veda");
				if($con===false)
					die("CONNECTION FAILED".mysqli_connect_error());
				$a=$_POST['rfname'];
				$b=$_POST['rlname'];
				$c=$_POST['rphone'];
				$d=$_POST['runame'];
				$e=$_POST['rpwd'];
				$g=$_POST['crpwd'];
				$f=$_POST['raddr'];
				$q="INSERT INTO retailers(rfname,rlname,rpno,runame,rpassword,raddress) VALUES ('$a','$b','$c','$d','$e','$f')";
				if($e != $g){
					echo "<script type=\"text/javascript\">
						alert(\"Password does not match !!!\");
					</script>";
					echo "<script> window.location.assign('registerR.html'); </script>";
					return false;
				}
				if(strlen($e) < 5){
					echo "<script type=\"text/javascript\">
						alert(\"Password length should be greater than 5 !!!\");
					</script>";
					echo "<script> window.location.assign('registerR.html'); </script>";
					return false;
				}
				if(mysqli_query($con,$q)){
					echo "<h5>Your registration has successfully completed  !</h5><br>";
					echo "<p>Click here to login to your account :</p>";
					echo "<div><a href='loginR.html'><button><span class='ab'></span>Retailer Login</button></a></div>";
				}
				else{
					echo "<script type=\"text/javascript\">
						alert(\"Username already exist !!!\");
					</script>";
					echo "<script> window.location.assign('registerR.html'); </script>";
				}		
				mysqli_close($con);
			?>
		</div>
	</div>
</body>
</html>
