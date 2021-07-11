<html>
    <head>
        <link rel="shortcut icon" href="images\tablogo.png">
        <title>Submit Page</title>
        <style>
            body{
                background-image: url("images/bgreg2.jpg");
                background-size: 100% 100%;
            }
        </style>  
    </head>
<body>
    <img id="logo" src="images\tablogo.png" height="90px" width="90px">
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Student (Sname,email,Mob,Branch,year,Domain,pass) VALUES ('". $_POST["name"] ."','". $_POST["email"] ."','". $_POST["tel"] ."','". $_POST["branch"] ."','". $_POST["year"] ."','". $_POST["domain"] ."','". $_POST["pass"] ."')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Welcome,". $_POST["name"] ."</h1><br>Thank you for Registering.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="login.html">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html">Home</a>
</center>
<body>
<html>