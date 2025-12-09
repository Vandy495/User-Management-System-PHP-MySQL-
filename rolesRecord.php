<?php
$serverName="localhost";
$userName="root";
$pass="";
$dbName="AgentSystem";

// Connect
$conn = mysqli_connect($serverName, $userName, $pass, $dbName);

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

$sqlDB = "INSERT INTO roles (role_name) VALUES
('Admin'),
('Player'),
('Agent'),
('Club Manager')";
    
if (mysqli_query($conn, $sqlDB)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
?>
