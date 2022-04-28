<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOTEKA</title>

    <!-- css -->
    <link rel="stylesheet" href="style/indexStyle.css">
</head>
<body>
    <h1>DOBRODOŠLI U ONLINE VIDEOTEKU</h1>

    <?php
    require 'include/connect.php'
    ?>
    <div class="login-main">
    <h2>Pristupite vašoj videoteci</h2>

    
    <form action="include/provjera.php" name="login" method="POST">
        <div class="login-name">
        <label for="username">Korisnicko ime</label>
        <input type="text" name="username">
        </div>

        <div class="login-pass">
            <label for="password">Lozinka</label>
            <input type="password" name="password">
        </div>
    <div class="btn-sub">
        <input type="submit" name="submit" value="Prijava">
    </div>


    </form>
    </div>

    
</body>
</html>