<?php
if (isset($_POST['upload']) && $_FILES['userfile']['size'] >0){
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	
	$fp = fopen ($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	
	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
	
	
	$id_insert = $_SESSION['logged_user_id'];
	$ins =  "INSERT INTO avatar (avatarid, name, size, type, content ) ".
"VALUES ($id_insert,'$fileName', $fileSize, '$fileType','$content') ";
	echo $ins;
	$conn->query($ins) OR print ("BLAAAD".mysqli_connect_error());
	
	
}
echo "siemano test";

echo $login_session;
echo $user_check;
echo $_SESSION['logged_user'];
echo $_SESSION['logged_user_id'];
echo gettype($_SESSION['logged_user_id']);

?>







<form method="post" enctype="multipart/form-data">
<table width="350" height="300" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td ">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td ><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>