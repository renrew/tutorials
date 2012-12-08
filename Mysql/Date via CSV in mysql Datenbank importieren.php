Wer mehr als eine Handvoll Produkte im Internet anbietet, hat viel Aufwand f�r das Einstellen und Pflegen seiner Produkte in einer Shop-Software wie zum Beispiel OS-Commerce. 
Stellen Sie sich vor, Sie m�ssen einige Tausend Produkte �ber ein Eingabeformular eintragen � das kann schon mal einen Monat dauern�
Wenn man die Produktdaten zum Beispiel von seinem Lieferanten auch als Excel-Tabelle bekommen kann, ist es recht einfach, alle Produkte auf einen Rutsch in die Shop-Datenbank zu importieren. 
Deshalb soll hier ein einfaches Beispiel gezeigt werden: Die Produkttabelle des Shops hei�t �produkte� und hat die Felder �produkt_name�, �produkt _nummer�, �produkt_preis� und �produkt _bild�.
In der Excel-Tabelle gibt es die vier Spalten �Bezeichnung�, �Artikelnummer�, �Preis� und �Bild�. Aus dieser Excel-Tabelle wird eine .csv-Datei mit dem Semikolon als Trennzeichen erzeugt.
Das nachstehende Import-Programm enth�lt deutliche Kommentare, die die Funktion erl�utern. 
Es zeigt zun�chst ein Eingabeformular, in dem man eine CSV-Produktdatei zum Import �ffnen und mit einer Checkbox festlegen kann, 
ob die darin enthaltenen Produkte zu den schon im Shop vorhandenen hinzu importiert werden sollen, oder ob die schon im Shop vorhandenen Produkte vorher gel�scht werden sollen.
Das Programm ist nur ein Muster, aber es zeigt gut, wie so ein Produktimport aufgebaut werden muss. 
F�r den Gebrauch in Ihrem System m�ssen die Datenbank und die Tabellen- und Feldnamen angepasst oder erweitert werden. 
In gr��eren Shopsystemen werden die Produktdaten meist auch in mehreren Tabellen, und nicht nur in einer wie in diesem Beispiel verwaltet. 
Zum Einstieg in die Problematik des Produktimports in einen Shop ist das Programm aber gut geeignet.








// Datenbankverbindung &ouml;ffnen

if($db = mysql_connect(�localhost�, �benutzer�, �passwort�)) {   echo �Mit Datenbank meinshop verbunden!�;}

mysql_select_db(�zaehler�,$db);

// Es wurde eine Produktdatei hochgeladen

if (isset($_FILES['datei']['name'])) {

echo �<br/>Die hochgeladenen Produkte:<br/><br/>�;

move_uploaded_file($_FILES['datei']['tmp_name'], �produkte.csv�);

$fp = @  fopen(�produkte.csv�, �r�);

// Daten-Tabelle zur �bersicht

echo �<table border=�0'>�;

$anz=0;

$anzneu=0;

$anzupdate=0;

// Produkt-Tabelle vorher leeren
if (isset($_POST["leer"])) {
$sqlleer=�delete from produkte�;
if (mysql_query($sqlleer)) {
echo �Alle Produkte gel&ouml;scht<br /><br />�;
}
}

// Durch alle Zeilen der Importdatei
while(!feof($fp)) {
If ($anz==0) {

// Erste Zeile enth�lt Spaltenbezeichnungen
$anz=$anz+1;
$zeile = fgets($fp,1000);
$felder = explode(�;�, $zeile);
echo �<tr><td>�.$felder[0].�</td<td>�.$felder[1].�</td<td>�;
echo $felder[2].�</td<td>�.$felder[3].�</td></tr>�;

} Else {

// Folgezeilen enthalten Produkte
$anz=$anz+1;
$zeile = fgets($fp,1000);
$felder = explode(�;�, $zeile);
echo �<tr><td>�.$felder[0].�</td<td>�.$felder[1].�</td<td>�;
echo $felder[2].�</td<td>�.$felder[3].�</td></tr>�;

// NEUEINTRAG
$mbezeichnung=$felder[0];
$martikel=$felder[1];
$mpreis=$felder[2];
$mbild=$felder[3];

// Produkt in Datenbank eintragen
$sqlneu=�insert into dmi_bilder (bezeichnung,artikelnummer,preis,bild) values   (��.$mbezeichnung.��,��.$martikel.��,�.$mpreis.�,��.$mbild.��)�;
mysql_query($sqlneu))
}
}
echo �</table>�;
fclose($fp);

$anz=$anz-1;
$anzalle=$anzupdate + $anzneu;
echo �<br/><br/>�.$anzneu.� Produkte neu eingetragen!<br/>�;

} else {

//Startformular
?>
<br/><b>Import von Produkten</b><br/><br/>
<form enctype=�multipart/form-data� action=�" method=�post�>
<br/><br/>Laden Sie die aktuelle Produkt-Datei hoch:<br/><br/>
<input name=�datei� type=�file� />
<br /><br /><inputtype=�checkbox� name=�leer�>
&nbsp;&nbsp;Produkttabelle vorher leeren<br/><br/>
<input value=�Produkt-Datei hochladen� />
</form>
}






