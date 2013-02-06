<?php
	include ‘db_connect.php‘;

	$datum = $_POST['datum'];
	$tachostand = $_POST['tachostand'];
	$liter = $_POST['liter'];
	$preis = $_POST['preis'];
	
	if(strlen($datum)>2 && strlen($tachostand)>2){
$sql = ‘INSERT INTO auto (datum, tachostand, liter, preis) VALUES (“‘.$datum.‘”, “‘.$tachostand.‘”, “‘.$liter.‘”, “‘.$preis.‘”)’;

	$eintragen = mysql_query($sql) or die(“Fehler: “.mysql_error());
     echo ‘Der Eintrag war erfolgreich’;
} else {
     echo ‘Ihre Angaben sind fehlerhaft.’;
}
echo ‘<a href=”form_benzin1.html”>Zurück</a>’;
?> 