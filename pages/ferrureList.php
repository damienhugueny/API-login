<?php 
session_start();

include '../api/config/databaseChevaux.php' ;


$sqlferrure = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$_SESSION["name"].'" 
                AND cheval ="'.$_GET['id'].'" 
                ORDER BY `date` DESC LIMIT 10';
                $queryResult = $pdo ->query($sqlferrure);
                $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/progressBar.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
<!-- Chargement de la liste des chevaux -->


    <header>
        <div class="container__nav">

            <div>
                <h4>Bienvenue <?=$_SESSION['name']?></h4>
                <span><?= $_GET['id'] ?> 🐎</span>
            </div>
            <div>
                <form action="../api/user/Logout.php" method="POST">

                    <input class="Logout__btm" type="submit" class="button" value="Se déconnecter">

                </form>
            </div>
       
        </div>
    <!-- TODO LE MENU-->
    </header>

    <div class="container__show">


        <?php foreach($ferrureList as $list){?>
    
            <div class="container">
                <div class="container--chevauxFerrure">
                    <div class="container--chevauxFerrure--block">
                        <span>📅 </span><?=$list['date'];?>
                    </div>
                    <div class="container--chevauxFerrure--block">
                        <?=$list['Commentaire'];?>
                    </div>
                </div>
            </div>
            



    
        <?php } ?>


    </div>   

    <footer>
    <!-- TODO LE FOOTER-->
        <div class="AddCheval">
        <?php include '../template/addEventChevaux-tpl.php' ?>
        </div>
        <button class="accordion">+</button>
        <a href="../home.php?user=<?=$_SESSION['id']?>" target="_blank"><button class="home">&laquo;</button></a>
<div class="container__date">
    <p><?=date("Y-m-d")?></p>
</div>

</footer>




<script src="../script/scriptAccordeon.js"></script>
</body>
</html>
