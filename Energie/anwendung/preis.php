<?php
include ("Helfer/datenbank_verbindung.php");
$eintrag =include  ("Helfer/datenbank_preis_anlegen");
	$eintragen = mysql_query($eintrag);
	if($eintragen == true)
   {
   echo "Eintrag war erfolgreich";
   }
else
   {
   echo "Fehler beim Speichern";
   }
