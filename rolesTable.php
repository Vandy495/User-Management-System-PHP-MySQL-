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
$sqlDB="CREATE TABLE Roles
(
id INT AUTO_INCREMENT PRIMARY KEY,
role_name VARCHAR(50) UNIQUE NOT NULL
)";

if(mysqli_query($conn,$sqlDB)){
    echo "table created successfully";
}
else{
    echo "Error in creating the  table: ".mysql_error($conn);
}

?>