<?php
$verbindung = mysql_connect("localhost",
"root","");
mysql_select_db("energietraeger");
//OR("Die Datenbank existiert nicht.");
mysql_query = SELECT * FROM erdgas ORDER BY zaehlerstand DESC LIMIT 1 ;
$ergebnis = mysql_query = SELECT MAX(zaehlerstand) FROM erdgas;

  echo $ergebnis * 2;

  
?>