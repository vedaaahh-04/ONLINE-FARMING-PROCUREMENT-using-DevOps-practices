<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="acc1.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="flogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<h6>
			<?php
				echo"Hello ".$_SESSION['uname']."... Welcome to your account";
			?>
			</h6>
			<p>Sell your product here for the maximum profit !!!</p>
		</div><br><br><br><br><br><br><br><br><br><br><br>
		<div class="main">
			<form name="fa" action="finalfarmer.php" method="post">
				<h2 class="name">Select the product : </h2>
				<select class="slist" type="list" name="course" required>
					<option value>Select your product : </option>
					<option value="rice">Rice</option>
					<option value="wheat">Wheat</option>
					<option value="corn">Corn</option>
					<option value="gnuts">Groundnuts</option>
					<option value="cotton">Cotton</option>
					<option value="sugar">Sugarcane</option>
					<option value="tobacco">Tobacco</option>
					<option value="jute">Jute</option>
				</select>

				<h2 class="name">Enter quantity : </h2>
				<input class="username" type="number" name="quantity">
				<label class="quantity">*in kilograms</label>
				<button type="submit"><span class="ab"></span>Get retailers</button>
			</form>
		</div>
	</div>
</body>
</html>
