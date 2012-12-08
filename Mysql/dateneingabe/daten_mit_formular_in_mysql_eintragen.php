<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "energietraeger";

//if (isset( $_POST['eintragen'] ))
//{

    
    //Inhalte aus POST holen
    $datum = $_POST['datum'];
    $zaehlerstand = $_POST['zaehlerstand'];
    $verbrauch_kubikmeter = $_POST['verbrauch_kubikmeter'];
    $verbrauch_kwh = $verbrauch_kubikmeter*0.9636*11.108;
	$verbrauch_euro = $_POST['verbrauch_euro'];
    // Verbindung oeffnen und Datenbank ausweahlen
     $conID= mysql_connect("localhost","root","12345");
        mysql_select_db( $db_name, $conID );

    
    // Anfrage, die an die Datenbank geschickt werden soll
    $sql = "INSERT INTO erdgas (datum, zaehlerstand, verbrauch_kubikmeter, verbrauch_kwh, verbrauch_euro)
            VALUES('$datum', '$zaehlerstand', '$verbrauch_kubikmeter', '$verbrauch_kwh', '$verbrauch_euro');";
                
    // Schickt die Anfrage an die DB und schreibt die Daten in die Tabelle
    mysql_query( $sql );
    echo $datum;
	?>