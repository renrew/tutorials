<?php
   if(!isset($_POST['datum'], $_POST['tachostand'])) {
      die("Bitte Benutzen sie das Formular\n");
   }
   if(trim($_POST['datum']) == "") {
     die("Kein Datum eingegeben");
   }
   if(trim($_POST['tachostand']) == "") {
     die("Keine Tachostand eingegeben");
   }
   if(trim($_POST['liter']) == "") {
     die("Keine Liter-Benzin eingegeben");
   }
   if(trim($_POST['preis']) == "") {
     die("Keine Literpreis eingegeben");
   }
   $datum = $_POST['datum'];
   $tachostand = $_POST['tachostand'];
   $liter = $_POST['liter'];
   $preis = $_POST['preis'];
   
   
   
   
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
		
		
		
		
		
		$sql = "INSERT INTO benzin
            (datum, tachostand, liter, preis)
         VALUES
            ('".$datum."',
            '".$tachostand."',
            '".$liter."',
            '".$preis."')";
   mysql_query($sql) OR die(mysql_error());
   
   
   
   if (!$sql)
        {
        die("Konnte die Daten nicht eintragen.
             Fehlermeldung: ". mysql_error());
        }

    echo "Daten erfolgreich eingetragen !";
	
	//header("Location: form_benzin2.html"); 
   ?>