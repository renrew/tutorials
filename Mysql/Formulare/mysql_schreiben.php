<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "12345";
$db_name = "test";

if (isset( $_POST['eintragen'] ))
{
    // Maskierende Slashes aus POST entfernen
    $_POST = get_magic_quotes_gpc() ? array_map( 'stripslashes', $_POST ) : $_POST;
    
    // Inhalte der Felder aus POST holen
    $vorname = $_POST['vorname'];
    $geschlecht = $_POST['geschlecht'];
    $alter = $_POST['alter'];
    $fuehrerschein = isset( $_POST['fuehrerschein'] ) ? 1 : 0;
    
    /* ************************************************************************************************ */
    /* *** Hier sollten und MUESSEN die Benutzereingaben geprueft werden um Schadcode abzufangen!!! *** */
    /* ************************************************************************************************ */
    
    // Sind alle Eingaben durch die Validierung gekommen werden sie in die DB geschrieben
    // Verbindung oeffnen und Datenbank ausweahlen
    $conID = mysql_connect( $db_host, $db_user, $db_pass ) or die( "Die Datenbank konnte nicht erreicht werden!" );
    if ($conID)
    {
        mysql_select_db( $db_name, $conID );
    }
    
    // Anfrage zusammenstellen der an die DB geschickt werden soll
    $sql = "INSERT INTO `traumprojekt`
                (`vorname`, `geschlecht`, `alter`, `fuehrerschein`)
            VALUES(
                '" .mysql_real_escape_string( $vorname ). "',
                '" .mysql_real_escape_string( $geschlecht ). "',
                " .$alter. ",
                " .$fuehrerschein. "
                )";
    // Schickt die Anfrage an die DB und schreibt die Daten in die Tabelle
    mysql_query( $sql );
    // Pruefen ob der neue Datensatz tatsaechlich eingefuegt wurde
    if (mysql_affected_rows() == 1)
    {
        echo "<h3>Der Datensatz wurde hinzugefügt!</h3>";
        // Hier kann weiterer Code stehen der ausgefuehrt werden soll
        // wenn ein Eintrag erfolgreich war. z.B. Email an den Admin schicken
        // der ueber den neuen Eintrag informiert
    }
    else
    {
        echo "<h3>Der Datensatz konnte <strong>nicht</strong> hinzugefügt werden!</h3>";
        // Hier koennen Massnahmen ergriffen werden die ueber den Misserfolg informieren
        // wie z.B. den Benutzer darueber zu informieren, dem Admin eine Mail schicken
        // damit er sich um den Fehler kuemmern kann, etc pp
    }
}
?>
