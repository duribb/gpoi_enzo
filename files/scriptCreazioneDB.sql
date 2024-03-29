--script creazione database

CREATE DATABASE TAGDB;

CREATE TABLE TAGS(
	tag VARCHAR(20),
	PRIMARY KEY(TAG)
);

CREATE TABLE FILES(
	nomefile VARCHAR(40), 
	percorso VARCHAR(200),
	PRIMARY KEY(nomefile)
);

CREATE TABLE ENZO(
	nomefile VARCHAR(40),
	tag VARCHAR(20),
	PRIMARY KEY(nomefile, tag),
	FOREIGN KEY(nomefile) REFERENCES FILES(NOMEFILE),
	FOREIGN KEY(tag) REFERENCES TAGS(TAG)
);

