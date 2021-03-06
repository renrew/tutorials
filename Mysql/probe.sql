CREATE TABLE mailusers(
id INT(11) NOT NULL AUTO_INCREMENT,
account VARCHAR(240) NOT NULL,
uid VARCHAR(6) DEFAULT '5001' NOT NULL,
gid VARCHAR(6) DEFAULT '5001' NOT NULL,
maildir VARCHAR(100) DEFAULT '/var/spool/maildirs' NOT NULL,
home VARCHAR(100) NOT NULL,
password VARCHAR(255) NOT NULL,
angelegt_von VARCHAR(60) NOT NULL,
angelegt_am DATE NOT NULL,
memo_txt VARCHAR(255) NOT NULL,
memo_vorname VARCHAR(60) NOT NULL,
memo_nachname VARCHAR(60) NOT NULL,
PRIMARY KEY (id),
UNIQUE (account)
) 