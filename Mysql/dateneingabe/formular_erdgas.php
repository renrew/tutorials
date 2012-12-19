<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "energietraeger";
// Verbindung oeffnen und Datenbank ausweahlen
     $conID= mysql_connect("localhost","root","");
        mysql_select_db( $db_name );
$sql = "
	SELECT 
		zaehlerstand,
		datum
	FROM 
		erdgas
	ORDER BY 
		zaehlerstand DESC
	LIMIT 1;
";

// holt ergebnis aus datenbank und speichert dieses in $result
$result = mysql_query( $sql );


$zmax = 0;
//var_dump($zmax);
//echo "<br>";

while($row = mysql_fetch_assoc($result))
{
	
	//echo $row["zaehlerstand"];
	$zmax = $row["zaehlerstand"];
	}
	

//var_dump($zmax);
//echo "<br>";

$zmax = floatval($zmax);
//var_dump($zmax);		

//if (isset( $_POST['eintragen'] ))
//{

    
    //Inhalte aus POST holen
    $datum = $_POST['datum'];
    $zaehlerstand = $_POST['zaehlerstand'];
    $verbrauch_kubikmeter = $_POST['Zehlerstand'-$zmax];
    $verbrauch_kwh = $verbrauch_kubikmeter*0.9636*11.108;
	$verbrauch_euro = $_POST['verbrauch_euro'];
    

    
    // Anfrage, die an die Datenbank geschickt werden soll
    $sql = "INSERT INTO erdgas (datum, zaehlerstand, verbrauch_kubikmeter, verbrauch_kwh, verbrauch_euro)
            VALUES('$datum', '$zaehlerstand', '$verbrauch_kubikmeter', '$verbrauch_kwh', '$verbrauch_euro');";
                
    // Schickt die Anfrage an die DB und schreibt die Daten in die Tabelle
    mysql_query( $sql );
    echo $datum;
	?>