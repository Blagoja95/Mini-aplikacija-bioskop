<?php 

// povezivanje sa bazom

$serverName = "localhost";
$userName = "root";
$pass = "";
$dbName = "webseminarski";


// uspostavljanje veze sa inicijalizovanim parametrima
$connection = mysqli_connect($serverName, $userName, $pass, $dbName);

// provjera konekcije

if (!$connection){
    echo "<br><br> Došlo je do greške u povezivanju sa bazom!";
}