CREATE TABLE BP(
	ENTRY_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ID INT NOT NULL,
    BLOOD_PRESSURE VARCHAR(255),
    CDATE DATE,
	FOREIGN KEY (ID) REFERENCES PATIENT(ID)
); 