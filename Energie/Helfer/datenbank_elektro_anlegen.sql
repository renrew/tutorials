CREATE TABLE IF NOT EXISTS elektro (#Erstelle die Tabelle, wenn sie nicht existiert
	id MEDIUMINT NOT NULL AUTO_INCREMENT, 
	data DECIMAL(15,3),
	zaehlerstand DECIMAL(15,3),
	verbrauch_kwh DECIMAL(15,3),
	verbrauch_euro DECIMAL(15,3),
		
	PRIMARY KEY (id))