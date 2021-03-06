#Datenhaltung
DROP TABLE IF EXISTS example;#L�sche die Tabelle example wenn sie existiert
CREATE TABLE IF NOT EXISTS example (#Erstelle die Tabelle, wenn sie nicht existiert
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	data VARCHAR(100),
	verbrauch_euro decimal(15,4) DEFAULT 0.1,
	PRIMARY KEY (id)
);

#Datenmanipulation
INSERT INTO example (data) VALUES
("Hallo"),
("Welt");

INSERT INTO example (data, verbrauch_euro) VALUES
("Hallo", 15.1),
("Welt", 88.2);

UPDATE example SET data = "test" WHERE data LIKE "Hallo";

#DELETE from example where id = 2;

SELECT * FROM example WHERE id = 1;