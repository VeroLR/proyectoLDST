<?php

@ $db =/*  mysqli_connect('vulcano.tel.uva.es', 'ldst002', '83bcz0fa', 'ldst002'); */ mysqli_connect('localhost', 'root', '', 'ldst002');
	echo "Todo ha ido bien";
if(!$db){
	echo "El servidor está caído...";
	exit;
}
?>