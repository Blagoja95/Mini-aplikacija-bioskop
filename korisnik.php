<?php 
        // preko globalne get dobijamo vrijednost 
        //korisnickom imena pomcu kojeg u upitu selektujemo samo tom 
        // korisniku bitne podatke
         $user = $_GET['user'];
        require 'include/connect.php';

        $sql = "SELECT * FROM korisnik, film
        where korisnik.username = '$user' and korisnik.grad = film.grad";

        $upit = mysqli_query($connection, $sql);
        
        // provjera da li ima podataka
        if (mysqli_num_rows($upit) > 0){ 
            $row = mysqli_fetch_array($upit);
        }
        else
        {
            echo "Ne postoje podaci u bazi";
        }

       
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- I naslov se pomocu php-a dinamicki mjenja  -->
    <title><?php echo $row['username'] . " - Profil korisnika"?></title>

    <!-- css -->
    <link rel="stylesheet" href="style/korisnikStyle.css">
</head>
<body>
    <nav>
        <h1>Dobrodošo, <?php echo $row['ime'] . " " . $row['prezime'];?></h1>
        <a href="index.php">Odjavite se</a>
    </nav>
    
    <div class="msg">
        <!-- Ispisuje se puno ime korisnika kao i ime njegovog mjesta i bioskopa -->
        <h2>U vašem gradu <?php echo $row['grad'] . " " ?>u bioskopu 
        <?php echo $row['bioskop'] . " "?> možete pogledati sledeće filmove:</h2>
    </div>

    <table>
        <tr class="row-first">
            <td>Naziv filma</td>
            <td>Godina</td>
            <td>Žanr</td>
        </tr>

        <!-- Pomocu php ispisujemo svaki red pojedinacno u html
        automatski sa svim podacima -->
        <?php 
            while($row = mysqli_fetch_array($upit)){
        ?>
        <tr>
            <td>
            <?php echo $row['nazivFilma']; ?>
            </td>
            <td>
            <?php echo $row['godina']; ?>
            </td>
            <td>
            <?php echo $row['zanr']; ?>
            </td>
        </tr>
        
        <!-- Kraj while petlje -->
        <?php
            }
            ?>
    </table>
    
    <div class="footer"></div>

</body>
</html>