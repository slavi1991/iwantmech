<?php
session_start();
include("define.php");




if($_SERVER["REQUEST_METHOD"] == "POST"){
	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
	$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
	
	
	$sql= "SELECT * FROM tabela1 WHERE username = '$myusername' and password = '$mypassword' ";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "id: " . $row["id"]. " Username " . $row['username'] . " Pwd " .$row["password"]. "</br>";
			$myid= $row['id'];
		}
		$_SESSION['logged_user'] = $myusername;
		
		settype($myid,'int');
		$_SESSION['logged_user_id'] = $myid;
		header("location: welcome.php");
	
	}
	else { echo "0 results"; }
	
$conn->close();
}

?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
<h1>Witaj! Zaloguj się</h1>
<div id="D_form">
<form action= "" method= "post">
<label>Username:</label><input type = "text" name="username" >
</br>
<label>Password: </label><input type = "password" name="password">
</br>
<input type="submit" value="Loguj" id="Loguj">
<input type="reset" value="Reset" id="Loguj">

</form>

</div>

</body>

</html>