<?php
$host = "sql.freedb.tech";
$user = "freedb_stockApp";
$pass = "JJYGY5$cvF$DygN";
$dbname = "freedb_bvijay";
$port = 3306; // Specify the port

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
  //  echo "Database connected successfully!";
}
?>
