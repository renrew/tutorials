<?php
$verbindung = mysql_connect("localhost",
"root","12345");
mysql_select_db("energietraeger");

$abfrage = "SELECT * FROM erdgas WHERE id = '1'";
$ergebnis = mysql_query($abfrage);
//var_dump($ergebnis);//var_dump � Gibt alle Informationen zu einer Variablen aus
while($row = mysql_fetch_object($ergebnis))
   {
   echo "$row->datum, $row->zaehlerstand, $row->verbrauch_kubikmeter, $row->verbrauch_kwh, $row->verbrauch_euro, $row->temperatur_min, $row->temperatur_max, $row->wetter <br>";

   }
?>