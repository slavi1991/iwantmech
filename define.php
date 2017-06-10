<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE','test');
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$conn){
	echo "Error: nie udało połączyć się z MYSQL". PHP_EOL;
	echo "Debugging errno: " .mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " .mysqli_connect_error() . PHP_EOL;
	exit;
	
}
echo "Success: A proper connection to MySQL was made! The DB_DATABASE database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

?>