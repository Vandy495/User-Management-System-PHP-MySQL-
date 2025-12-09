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

$sqlDB = "INSERT INTO users (name, email, password, role_id) VALUES
('Alice Admin', 'admin1@example.com', MD5('password123'), 1),
('Ben Admin', 'admin2@example.com', MD5('password123'), 1),

('Peter Player', 'player1@example.com', MD5('pass123'), 2),
('Musa Player', 'player2@example.com', MD5('pass123'), 2),

('Aisha Agent', 'agent1@example.com', MD5('agentpass'), 3),
('John Agent', 'agent2@example.com', MD5('agentpass'), 3),

('Kante Manager', 'manager1@example.com', MD5('manage12'), 4),
('Sarah Manager', 'manager2@example.com', MD5('manage12'), 4)";
    
if (mysqli_query($conn, $sqlDB)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
?>
