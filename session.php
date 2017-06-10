<?php 

include('define.php');
session_start();

$user_check = $_SESSION['logged_user'];

$ses_sql = $conn->query("SELECT username FROM tabela1 WHERE username = '$user_check' ");


	
$row = $ses_sql->fetch_assoc();
$login_session = $row['username'];

if (!isset($_SESSION['logged_user'])){
	header("location:login.php");
	
}
		
	

?>