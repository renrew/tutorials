<?php
// Datenbank-Verbindung herstellen
require_once ('datenbankverbindung.php');
 
// Nutzen von Datenbank (Name ist hinterlegt in 
// Konstante MYSQL_DATENBANK)
mysql_select_db( MYSQL_DATENBANK )
  or die("Auswahl der Datenbank fehlgeschlagen");
 
// MySQL-Befehl der Variablen $sql zuweisen
$sql = "
    CREATE TABLE `adressen` (
    `id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `nachname` VARCHAR( 150 ) NOT NULL ,
    `vorname` VARCHAR( 150 ) NULL ,
    `akuerzel` VARCHAR( 2 ) NOT NULL ,
    `strasse` VARCHAR( 150 ) NULL ,
    `plz` INT( 5 ) NOT NULL ,
    `telefon` VARCHAR( 20 ) NULL
    ) ENGINE = MYISAM ;
    ";
 
// MySQL-Anweisung ausf�hren lassen
$db_erg = mysql_query($sql) 
  or die("Anfrage fehlgeschlagen: " . mysql_error());
?>