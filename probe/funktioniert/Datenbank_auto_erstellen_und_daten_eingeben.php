<?php
    $server = "localhost";
    $datenbank = "auto";
    $username = "root";
 
    $link = mysql_connect($server, $username);

    if (!$link)
        {
        die("Konnte die Datenbank nicht öffnen.
             Fehlermeldung: ". mysql_error());
        }

    echo "Erfolgreich zur Datenbank verbunden !";

    $db = mysql_select_db($datenbank, $link);

    if (!$db)
        {
        echo "Konnte die Datenbank nicht auswählen.";
        }
	$sql_befehl = "CREATE TABLE IF NOT EXISTS benzin (
      ID        INT AUTO_INCREMENT PRIMARY KEY,
      datum      DATE,
      tachostand     VARCHAR(70),
      liter        VARCHAR(70),
      preis        VARCHAR(16)
    )";
    if (mysql_query($sql_befehl)) {
      echo "Datenbanktabelle erfolgreich angelegt.<br>" ;  
    } else {
      echo "Datenbanktabelle konnte nicht angelegt werden!<br>" ;
    }

    mysql_close($link);