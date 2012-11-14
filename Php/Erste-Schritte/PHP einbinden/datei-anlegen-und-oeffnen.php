<?php
$datei = fopen("Probe1.txt", "r+");
$counterstand = fgets($datei, 10);
if($counterstand == "")
   {
   $counterstand = 0;
   }
   $counterstand++;
echo $counterstand;
rewind($datei);
fwrite($datei, $counterstand);
fclose($datei);
?>