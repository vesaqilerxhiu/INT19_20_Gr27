<?php

require("dbconfig.php");


//MySQLi Procedurale
$conn = mysqli_connect(servername, username, password, dbname); 
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

//OSE
//mysqli_select_db($conn, dbname);

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
birthday DATE,
gender VARCHAR(2),
email VARCHAR(50),
password VARCHAR(50),
c_password VARCHAR(50),
data_regjistrimit TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "CREATE TABLE login (
lid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lemail VARCHAR(50),
lpassword VARCHAR(50),
data_loginit TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
 
$retval = mysqli_query($conn, $sql );
if(! $retval )
{
die('Nuk mund te krijohet tabela: ' . mysqli_error($conn));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($conn);
	
?>

