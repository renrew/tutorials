<?php
    $server = "localhost";
    $datenbank = "auto";
    $username = "root";
 
    $link = mysql_connect($server, $username);

    if (!$link)
        {
        die("Konnte die Datenbank nicht �ffnen.
             Fehlermeldung: ". mysql_error());
        }

    echo "Erfolgreich zur Datenbank verbunden !";

    $db = mysql_select_db($datenbank, $link);

    if (!$db)
        {
        echo "Konnte die Datenbank nicht ausw�hlen.";
        }
	$sql_befehl = 
	"CREATE TABLE IF NOT EXISTS benzin (
      ID        INT AUTO_INCREMENT PRIMARY KEY,
      datum      DATE,
      tachostand     INT(10),
      liter        decimal(5,2),
      preis        DECIMAL(16,2)
    )";
    if (mysql_query($sql_befehl)) {
      echo "Datenbanktabelle erfolgreich angelegt.<br>" ;  
    } else {
      echo "Datenbanktabelle konnte nicht angelegt werden!<br>" ;
    }

    mysql_close($link);
	?>