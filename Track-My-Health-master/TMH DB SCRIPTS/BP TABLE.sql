CREATE TABLE BP(
	ENTRY_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ID INT NOT NULL,
    TOP_NUMBER INT NOT NULL,
    BOTTOM_NUMBER INT NOT NULL,
    CDATE DATE,
	FOREIGN KEY (ID) REFERENCES PATIENT(ID)
);