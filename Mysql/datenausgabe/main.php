<?php
include ("datenausgabe5-max_wert_spalte_order_mit_php.php");

// 1. erstelle Datenbankobjekt aus Klasse DatenbankZmax
$db = new DatenbankZmax();

// 2. erstelle Datenbankverbindung
$db->erstelleVerbindung();

// 3. hole Ergebnisse aus Datenbank und schreibe das Ergebnis in $result
$result = $db->holeZmax();

// 4. gebe das Ergebnis aus
$db->gebeZmaxAus($result);