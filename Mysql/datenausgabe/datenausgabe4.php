<?php
$verbindung = mysql_connect("localhost",
"root","12345");
mysql_select_db("energietraeger");

$abfrage = SELECT sum(verbrauch_euro) FROM erdgas
$ergebnis = mysql_query($abfrage);
echo "$ergebnis"
?>
#