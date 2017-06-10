<?php 
	$polecenie = " SELECT content FROM avatar INNER JOIN tabela1 ON avatar.avatarid = tabela1.id ";
	$wynik = $conn->query($polecenie);
	if($wynik->num_rows > 0){
	echo "select przeszedl";
	while($row = $wynik->fetch_assoc()){
		
		$obrazek = $row['content'];
		echo gettype($obrazek);
	}
	}




?>