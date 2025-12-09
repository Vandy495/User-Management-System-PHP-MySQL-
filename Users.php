<?php 
$serverName="localhost";
$userName="root";
$pass="";
$dbName="AgentSystem";
$conn=mysqli_connect($serverName,$userName,$pass,$dbName);
if(!$conn){
    die('Connection error: '.mysqli_connect_error());
}
//create table name student
$sqlDB="CREATE TABLE users
(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(150) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
role_id INT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (role_id) REFERENCES roles(id)
)";

if(mysqli_query($conn,$sqlDB)){
    echo " table created successfully";
}
else{
    echo "Error in creating the  table: ".mysql_error($conn);
}
?>