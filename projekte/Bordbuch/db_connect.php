<?php
$db_host = “localhost”;
$db_user = “root”;
$db_name = “auto”;
mysql_connect(“$db_host”,“$db_user”) or die
(“Keine Verbindung moeglich”);
mysql_select_db(“$db_name”) or die (“Die Datenbank existiert nicht.”);
?>