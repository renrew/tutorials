#Datenhaltung_Tabelle anlegen
DROP TABLE IF EXISTS erdgas;#Lösche die Tabelle example wenn sie existiert
CREATE TABLE IF NOT EXISTS erdgas(
	id  INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	datum  DATE NOT NULL,
	zaehlerstand  VARCHAR(15) NOT NULL,
	verbrauch_kubikmeter  DECIMAL(15,3),
	verbrauch_kwh  DECIMAL(15,3),
	verbrauch_euro  DECIMAL(15,3),
	temperatur_min  DECIMAL(15,1),
	temperatur_max  DECIMAL(15,1),
	wetter  VARCHAR (30)
);
#Datenmanipulation
INSERT INTO erdgas (datum, zaehlerstand, verbrauch_kubikmeter, verbrauch_kwh, verbrauch_euro) VALUES
	("2009.01.11", "40714,212", 11.688, verbrauch_kubikmeter*0.9636*11.108, 6.10),
	("2009.01.12", "40732,179", 17.967, verbrauch_kubikmeter*0.9636*11.108, 9.37),
	("2009.01.13", "40749,437", 17.258, verbrauch_kubikmeter*0.9636*11.108, 9.00),
	("2009.01.14", "40765,099", 15.662, verbrauch_kubikmeter*0.9636*11.108, 8.17),
	("2009.01.15", "40775,380", 10.281, verbrauch_kubikmeter*0.9636*11.108, 5.36),
	("2009.01.16", "40786,338", 10.958, verbrauch_kubikmeter*0.9636*11.108, 5.72),
	("2009.01.17", "40797,883", 11.545, verbrauch_kubikmeter*0.9636*11.108, 6.02),
	("2009.01.18", "40810,757", 12.874, verbrauch_kubikmeter*0.9636*11.108, 6.72),
	("2009.01.19", "40819,714", 8.957, verbrauch_kubikmeter*0.9636*11.108, 4.67),
	("2009.01.20","40830,769", 11.055, verbrauch_kubikmeter*0.9636*11.108, 5.77),
	("2009.01.21", "40843,673", 12.904, verbrauch_kubikmeter*0.9636*11.108, 6.73),
	("2009.01.22", "40854,779", 11.106, verbrauch_kubikmeter*0.9636*11.108, 5.79),
	("2009.01.23", "40865,604", 10.825, verbrauch_kubikmeter*0.9636*11.108, 5.65),
	("2009.01.24", "40875,531", 9.927, verbrauch_kubikmeter*0.9636*11.108, 5.18),
	("2009.01.25", "40886,441", 10.910, verbrauch_kubikmeter*0.9636*11.108, 5.69),
	("2009.01.26", "40895,102", 8.661, verbrauch_kubikmeter*0.9636*11.108, 4.52),
	("2009.01.27", "40906,333", 11.231, verbrauch_kubikmeter*0.9636*11.108, 6.02),
	("2009.01.28", "40921,215", 14.882, verbrauch_kubikmeter*0.9636*11.108, 5.68),
	("2009.01.29", "40936,550", 15.335, verbrauch_kubikmeter*0.9636*11.108, 8.00),
	("2009.01.30","40946,690", 10.140, verbrauch_kubikmeter*0.9636*11.108, 5.88);

