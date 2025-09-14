<?php
$servername = "localhost";  // replace with your server name
$username = "root";         // replace with your username
$password = "";     // replace with your password
$dbname = "agreement.pk";     // replace with your database name

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname)or die("Connection failed");

if ($conn->connect_error) {
    die("Connection failed");
}

 echo "Connected successfully";
?>