<?php
$dsn ="mysql:hostname=localhost;dbname=carwash_db";
$dbusername = "root";
$dbpass = "";
try{
$pdo = new PDO($dsn,$dbusername,$dbpass); // PDO Connection; 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"connected successfully";

}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
