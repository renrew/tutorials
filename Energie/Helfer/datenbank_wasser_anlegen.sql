#Datenhaltung_Tabelle anlegen
DROP TABLE IF EXISTS wasser;#Lösche die Tabelle example wenn sie existiert
CREATE TABLE IF NOT EXISTS wasser (#Erstelle die Tabelle, wenn sie nicht existiert
	id MEDIUMINT NOT NULL AUTO_INCREMENT, 
	datum date,
	zaehlerstand DECIMAL(15,3),
	verbrauch_liter DECIMAL(15,3),
	verbrauch_euro DECIMAL(15,3),
		
	PRIMARY KEY (id))