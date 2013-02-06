<?php
    $server = "localhost";
    $datenbank = "auto";
    $username = "root";
    

    $link = mysql_connect($server, $username);
    if (!$link)            die(mysql_error());

    $db = mysql_select_db($datenbank, $link);

    if ($db)
        {
        $sql_befehl = 'INSERT INTO benzin
                        (datum, tachostand, liter, preis)
                        VALUES ("2009.10.09",
                                "127261",
                                "25",
                                "1.07");';

        mysql_query($sql_befehl, $link);
        }

    mysql_close($link);
?>