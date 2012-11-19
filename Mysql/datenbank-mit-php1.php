<?php
// Datenbank-Verbindung herstellen
// siehe (mysql-datenbank-verbindung-herstellen.htm)
require_once ('konfiguration.php');
 
// zuweisen der MySQL-Anweisung einer Variablen
$sql = 'CREATE DATABASE adressverwaltung ';
 
$result = mysql_query($sql)
  or die("Anfrage fehlgeschlagen: " . mysql_error());
?>