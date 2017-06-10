<?php 

include('define.php');
session_start();

$user_check = $_SESSION['logged_user'];

$ses_sql = $conn->query("SELECT username FROM tabela1 WHERE username = '$user_check' ");

?>