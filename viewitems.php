<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="ff.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="retailerA.php"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>   Back</a></li>
				<li><a href="rlogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Logout</a></li>
			</ul>
		</div>
		<div align="center">
			<h6>Items requested by you : </h6>
			<?php
				$con = mysqli_connect("localhost","root","","veda");
				if($con===false)
					die("CONNECTION FAILED".mysqli_connect_error());
				$uname = $_SESSION['uname'];
				$a = "select `item`,`quantity`,`price` from retailerdata where `username`='$uname'";
				$result = mysqli_query($con,$a);
			?>
			<table class="cont" cellpadding="10" cellspacing="2" align="center">
				<tr><th>Item    </th>
					<th>Quantity    </th>
					<th>Price    </th>
				</tr>
				<?php
					if ($result->num_rows > 0) {
						while(($row=mysqli_fetch_array($result))!=NULL) {
							echo "<tr><td>".$row[0]."</td>
									  <td>".$row[1]."</td>
									  <td>".$row[2]."</td></tr>";
						}
					}
					else{
						echo "<script type=\"text/javascript\">
							alert(\"No items selected !\");
						</script>";
						echo "<script> window.location.assign('retailerA.php'); </script>";
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>
