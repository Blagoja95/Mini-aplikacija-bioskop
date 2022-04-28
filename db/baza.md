# Napravi bazi

CREATE DATABASE webSeminarski

# Napravi tabelu korisnik

CREATE TABLE `webseminarski`.`korisnik` ( `idKorisnika` INT NOT NULL AUTO_INCREMENT , `ime` VARCHAR(20) NOT NULL , `prezime` VARCHAR(50) NOT NULL , `grad` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`idKorisnika`)) ENGINE = InnoDB; 

# Unesi korisnike u tabeli
INSERT INTO `korisnik` (`idKorisnika`, `ime`, `prezime`, `grad`, `username`, `password`) VALUES ('1', 'Boris', 'Blagojevic', 'Banja Luka', 'boka95', '123456789'), ('2', 'Marko', 'Markovic', 'Prijedor', 'markan', '1234567890') 

# Napravi tabelu film

CREATE TABLE `webseminarski`.`film` ( `id_filma` INT NULL , `nazivFilma` VARCHAR(20) NOT NULL , `godina` VARCHAR(4) NOT NULL , `zanr` VARCHAR(20) NOT NULL , `grad` VARCHAR(20) NOT NULL , `bioskop` VARCHAR(20) NOT NULL ) ENGINE = InnoDB; 

# Unesi filmove u tabelu

INSERT INTO `film` (`id_filma`, `nazivFilma`, `godina`, `zanr`, `grad`, `bioskop`) VALUES ('1', 'No time to Die', '2021', 'Akcija', 'Banja Luka', 'Palas'), ('2', 'Toma', '2021', 'Biografija', 'Prijedor', 'Kino Kozara'), ('3', 'Free Guy', '2021', 'Komedija', 'Prijedor', 'Kino Kozara'), ('4', 'Moj jutarnji smeh', '2019', 'Drama', 'Banja Luka', 'Palas'), ('5', 'Cry Macho', '2021', 'Western', 'Banja Luka', 'Palas'), ('6', 'Venom', '2018', 'Akcija', 'Banja Luka', 'Palas'), ('7', 'Dune', '2021', 'Akcija', 'Banja Luka', 'Cinestar'), ('8', 'Licorice Pizza', '2021', 'Komedija', 'Prijedor', 'Kino Kozara') 