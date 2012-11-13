<?php
$timestamp = time();//Ermitterl den Timestamp
$datum = date("d.m.Y - H:i", $timestamp);//Ermittelt und speichert mit dem Timestamp Datum und Uhrzeit der Eingabe
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$titel = $_POST["titel"];
$aktuell = $_POST["aktuell"];
if($vorname !=""and $nachname !=""and $titel !=""and $aktuell !="")//Fragt ab, ob alle Felder ausgefüllt sind
   {
   echo $titel ."<br>" .$vorname .$nachname ."<br>" ."Geboren am: " .$aktuell ."<br>" ."Eingegeben am:" ." ".$datum; //Ausgabe, wenn Antwort Ja ist
   }
else
   {
   echo "Füllen Sie bitte alle Felder aus" ."<br>" ."<br>" .$datum;//Ausgabe,wenn Antwort nein ist
   }
?>