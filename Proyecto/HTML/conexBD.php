<?php

@ $db = mysqli_connect('vulcano.tel.uva.es', 'ldst002', '83bcz0fa', 'ldst002');
	echo "Eres una puta";
if(!$db){
	echo "El servidor está caído...";
	exit;
}
?>