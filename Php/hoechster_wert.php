<?php
error_reporting(E_ALL);
 
// Zum Aufbau der Verbindung zur Datenbank
define ( 'MYSQL_HOST',      'localhost' );
define ( 'MYSQL_BENUTZER',  'root' );
define ( 'MYSQL_KENNWORT',  '' );
define ( 'MYSQL_DATENBANK', 'energietraeger' );
 
$db_link = mysql_connect (MYSQL_HOST, 
                          MYSQL_BENUTZER, 
                          MYSQL_KENNWORT);
 
if ( $db_link )
{
    echo 'Verbindung erfolgreich: ';
    //echo $db_link;
}
else
{
    // hier sollte dann später dem Programmierer eine
    // E-Mail mit dem Problem zukommen gelassen werden
    die('keine Verbindung möglich: ' . mysql_error());
}
//mysql_close($db_link );
$query = mysql_query('SELECT * FROM erdgas ORDER BY id DESC');
while($row = mysql_fetch_object($query);
{
   echo "$row->zaehlerstand <br>";
   }
?>
