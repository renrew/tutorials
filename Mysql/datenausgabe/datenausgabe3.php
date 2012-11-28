<?php
	$verbindung = mysql_connect("localhost",
	"root","12345");
	mysql_select_db("energietraeger");

	$abfrage = "SELECT zaehlerstand FROM erdgas WHERE id = '1'";
	$ergebnis = mysql_query($abfrage);
	$row = mysql_fetch_object($ergebnis);

	echo "$row->zaehlerstand";

?>