<?php
$host = "sql.freedb.tech";
$user = "freedb_bvijay";
$pass = 'JJYGY5$cvF$DygN';  // 🔐 FIXED using single quotes
$dbname = "freedb_stockApp";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
