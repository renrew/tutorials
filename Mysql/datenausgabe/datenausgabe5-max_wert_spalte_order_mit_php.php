<?php

mysql_connect("localhost","root","");
mysql_select_db("energietraeger");	


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
	
	echo $row["zaehlerstand"];
	$zmax = $row["zaehlerstand"];
	}
	

//var_dump($zmax);
//echo "<br>";

$zmax = floatval($zmax);
//var_dump($zmax);
?>
