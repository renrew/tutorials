CREATE TABLE IF NOT EXISTS preise (#Erstelle die Tabelle, wenn sie nicht existiert
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	data DECIMAL(15,3),
	erdgas_euro DECIMAL(15,3),
	erdgas_grund_euro DECIMAL(15,3),
	strom_euro DECIMAL(15,3),
	strom_grund_euro DECIMAL(15,3),
	wasser_euro DECIMAL(15,3),
	abwasser_euro DECIMAL(15,3),
	
	PRIMARY KEY (id)
)