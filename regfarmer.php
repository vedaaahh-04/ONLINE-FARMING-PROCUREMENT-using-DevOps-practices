<?php
$host = "veda.coannvnsp2rk.ap-south-1.rds.amazonaws.com";
$user = "root";
$pass = "vallika4503";
$dbname = "veda";
$port = 3306; // Make sure to use the correct port

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";

// Connection successful, you can now use $conn to interact with the database

$a = $_POST['ffname'];
$b = $_POST['flname'];
$c = $_POST['fphone'];
$d = $_POST['funame'];
$e = $_POST['fpwd'];
$g = $_POST['cfpwd'];
$f = $_POST['faddr'];
$q = "INSERT INTO farmers(fname, lname, pno, uname, password, address) VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

if ($e != $g) {
    echo "<script type=\"text/javascript\">
        alert(\"Password does not match !!!\");
    </script>";
    echo "<script> window.location.assign('registerF.html'); </script>";
    exit;
}

if (strlen($e) < 5) {
    echo "<script type=\"text/javascript\">
        alert(\"Password length should be greater than 5 !!!\");
    </script>";
    echo "<script> window.location.assign('registerF.html'); </script>";
    exit;
}

if ($conn->query($q) === TRUE) {
    echo "<h5>Your registration has successfully completed  !</h5><br>";
    echo "<p>Click here to login to your account :</p>";
    echo "<div><a href='loginF.html'><button><span class='ab'></span>Farmer Login</button></a></div>";
} else {
    echo "<script type=\"text/javascript\">
        alert(\"Error: " . $conn->error . "\");
    </script>";
    echo "<script> window.location.assign('registerF.html'); </script>";
}

$conn->close();
?>
