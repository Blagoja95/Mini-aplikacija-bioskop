<?php 

require '../include/connect copy.php';

$sql="CREATE DATABASE webseminarski";

if (mysqli_query($connection, $sql)){

	echo "Uspjesno kreirana baza!";
}else
{
	echo "Neuspjesno kreirana baza! " .mysqli_error($connection);
}