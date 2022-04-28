<?php



// if (isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

// echo "<h1> $username   $password</h1>";

// salje se upit koji vraca vrijednosti koje su iste kao
$sql = "SELECT * FROM korisnik
WHERE username = '$username' AND pass = '$password'";

require 'connect.php';

$upit = mysqli_query($connection, $sql);

$row = mysqli_fetch_row($upit);

// foreach ($row as $value){
//     echo $value . " ";
// }


 //echo "Username: " . $row[4] . " password: " . $row[5];

//echo "Username: " . $row['username'] . " password: " . $row['pass'];

// provjerava se korisnicko ime
// ako je tacno onda se preusmjerava na novu stranicu
// sa get vrijednosti korisnickog imena


if ($username == $row[4] && $password = $row[5]){
    header("Location: ../korisnik.php?user={$username}");
    //echo "<h1>USPJESNO</h1>";
}
else
{
  //ako je netacno vracamo se na stranicu index
    header('location: ../index.php');
}


//}