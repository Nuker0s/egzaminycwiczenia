<?php

$polaczenie = new mysqli("localhost","root","1234","wedkarstwo",3306);

$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];

$polaczenie->query("INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) 
					VALUES ('0', '$lowisko', '$data', '$sedzia')");
			 
$polaczenie->close();

?>