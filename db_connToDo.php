
<?php
$server_servername = "localhost";
$server_database = "u397214565_ISE311";
$server_username = "u397214565_ferivonus";
$server_password = "Fahrettin_basturk22";

// Create connection
try {
    $conn = new PDO("mysql:host=$server_servername;dbname=$server_database", 
                    $server_username, $server_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}