<?php
// Datenbank-Verbindung herstellen
require_once ('datenbankverbindung.php');
 
// Nutzen von Datenbank (Name ist hinterlegt in 
// Konstante MYSQL_DATENBANK)
mysql_select_db( MYSQL_DATENBANK )
  or die("Auswahl der Datenbank fehlgeschlagen");
 
// MySQL-Befehl der Variablen $sql zuweisen
$sql = "DROP TABLE `adressen` ";
 
// MySQL-Anweisung ausführen lassen
$db_erg = mysql_query($sql) 
  or die("Anfrage fehlgeschlagen: " . mysql_error());
?>