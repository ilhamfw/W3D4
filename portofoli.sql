--Create Table Profil from DB Portofolio

CREATE TABLE profil (
    id_profile INT, AUTO INCREMENT
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    role VARCHAR(255),
    availability VARCHAR(255),
    usia INT,
    lokasi VARCHAR(255),
    pengalaman INT,
    email INT,
    PRIMARY KEY (id_profile)
);

--Insert Data
INSERT INTO profil (first_name, last_name, role, availability, usia, lokasi, pengalaman, email)
VALUES ('Ilham', 'Fiqri', 'Fulltime', '19', 'Jakarta', '2', 'ilham.fw18@gmail.com');

--Update Data
UPDATE profil
SET first_name = 'Alfred Schmidt', lokasi= 'Frankfurt'
WHERE id_profile = 1;