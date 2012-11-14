<?php
$zahl = $_POST['zahl'];
$a = 0;
if($zahl > 100 or $zahl < 1)//if überprüft, ob die eingegebene Zahl im Bereich zwischen 1 und 100 ist
   {
   echo "Zahl nicht im geforderten Bereich";//Ausgabe beim Ergebnis falsch(false)
   }
   else
   {
   while($a < $zahl)
   {
   $a++;
   echo $a.", ";//Ausgabe beim Ergebnis wahr
   }
   }
   ?>
   