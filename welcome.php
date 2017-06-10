<?php

	include('session.php');
	include('DLobrazka.php');
	
	
	
	
	
	
	
	
	
	
?>

<html>


<head>
<link rel="stylesheet" type="text/css" href="styl.css">
<title>Stronka po zalogowaniu</title>
</head>


<body>


<h1> siema <?php echo $login_session; ?> </h1>
<h2><a href = "logout.php"> Wyloguj </a></h2>

<div id= "TOP1_div"> a</div>
<div id= "TOP2_div">
<div id= "AVATAR_div">
<!-- <img src="GetAvatar.php" /> -->

<?php 
	
	

echo '<img height="250" width="250" src = "data:image/png;base64,'.base64_encode($obrazek).'" />' ?>



</div>
<br><br><br><br><br>
<?php

	include('upload.phps');
	
?>




</div>



</body>
</html>