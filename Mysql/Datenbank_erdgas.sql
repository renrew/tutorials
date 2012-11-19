#Datenhaltung
DROP TABLE IF EXISTS erdgas;#Lösche die Tabelle erdgas wenn sie existiert
CREATE TABLE IF NOT EXISTS erdgas (#Erstelle die Tabelle, wenn sie nicht existiert
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	datum DATE,
	verbrauch_euro decimal(15,4) DEFAULT 0.1,
	PRIMARY KEY (id)
);

#Datenmanipulation
INSERT INTO erdgas (datum) VALUES
(15.05.2011),
(15.05.2012);

/* INSERT INTO erdgas (datum, verbrauch_euro) VALUES 
("12.02.2012", 15.02.2012),
("6,25", 5,62); 
 */
