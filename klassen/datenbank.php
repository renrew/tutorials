<?php

  class DatenbankZmax
  {
	
	public function erstelleVerbindung() {
		mysql_connect("localhost","root","");
		mysql_select_db("energietraeger");	
	}
	
	public function holeZmax() {
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
		
		return mysql_query( $sql );
	}
	
	public function gebeZmaxAus($ergebnis) {
		$zmax = 0;
		var_dump($zmax);
		echo "<br>";

		while($row = mysql_fetch_assoc($ergebnis))
		{
			//echo $row["zaehlerstand"];
			$zmax = $row["zaehlerstand"];
		}

		var_dump($zmax);
		echo "<br>";

		$zmax = floatval($zmax);
		var_dump($zmax);
	}
  }

?>