<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/progressBar.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
<!-- Chargement de la liste des chevaux -->
    <header>
        <div class="container__nav">

            <div>
                <h4>Bienvenue <?=$_SESSION['name']?></h4>
            </div>
            <div>
                <form action="./api/user/Logout.php" method="POST">

                    <input class="Logout__btm" type="submit" class="button" value="Se déconnecter">

                </form>
            </div>
       
        </div>
    <!-- TODO LE MENU-->
    </header>