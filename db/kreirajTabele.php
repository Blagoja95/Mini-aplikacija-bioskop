<?php

require '../include/connect.php';

// tabela korisnik
$sql = "CREATE TABLE `webseminarski`.`korisnik` ( `idKorisnika` INT NOT NULL AUTO_INCREMENT , `ime` VARCHAR(20) NOT NULL , `prezime` VARCHAR(50) NOT NULL , `grad` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `pass` VARCHAR(20) NOT NULL , PRIMARY KEY (`idKorisnika`)) ENGINE = InnoDB";

//slanje uputa za korisnik
if(mysqli_query($connection, $sql)){

	echo "Uspjesno kreirana tabela korisnik!";
}
else{
	echo "Neuspjesno kreirana tabela! " .mysqli_error($connection);
}


// tabela film
$sql = "CREATE TABLE `webseminarski`.`film` ( `id_filma` INT NULL , `nazivFilma` VARCHAR(20) NOT NULL , `godina` VARCHAR(4) NOT NULL , `zanr` VARCHAR(20) NOT NULL , `grad` VARCHAR(20) NOT NULL , `bioskop` VARCHAR(20) NOT NULL ) ENGINE = InnoDB";

echo "<br><br>";

//slanje uputa za film
if(mysqli_query($connection, $sql)){

	echo "Uspjesno kreirana tabela film!";
}
else{
	echo "Neuspjesno kreirana tabela! " .mysqli_error($connection);
}

echo "<br><br>";

//kreiranje podataka za tabelu korisnik
$sql = "INSERT INTO `korisnik` (`idKorisnika`, `ime`, `prezime`, `grad`, `username`, `pass`)
 VALUES ('1', 'Boris', 'Blagojevic', 'Banja Luka', 'boka95', '123456789'),
  ('2', 'Marko', 'Markovic', 'Prijedor', 'markan', '1234567890') ";

//slanje uputa za korisnik
if(mysqli_query($connection, $sql)){

	echo "Uspjesno kreirani podaci korisnik!";
}
else{
	echo "Neuspjesno kreirana tabela! " .mysqli_error($connection);
}


$sql = "INSERT INTO `film` (`id_filma`, `nazivFilma`, `godina`, `zanr`, `grad`, `bioskop`)
 VALUES ('1', 'No time to Die', '2021', 'Akcija', 'Banja Luka', 'Palas'),
  ('2', 'Toma', '2021', 'Biografija', 'Prijedor', 'Kino Kozara'),
   ('3', 'Free Guy', '2021', 'Komedija', 'Prijedor', 'Kino Kozara'),
    ('4', 'Moj jutarnji smeh', '2019', 'Drama', 'Banja Luka', 'Palas'),
     ('5', 'Cry Macho', '2021', 'Western', 'Banja Luka', 'Palas'),
      ('6', 'Venom', '2018', 'Akcija', 'Banja Luka', 'Palas'),
       ('7', 'Dune', '2021', 'Akcija', 'Banja Luka', 'Cinestar'),
        ('8', 'Licorice Pizza', '2021', 'Komedija', 'Prijedor','Kino Kozara') ";

echo "<br><br>";
//slanje upita za film
if(mysqli_query($connection, $sql)){
	echo "Uspjesno uneseni podaci film!";
}else{
	echo "Neuspjesno uneseni podaci!" .mysqli_error($connection);
}

//zatvaranje konekcije sa bazom
mysqli_close($connection);
