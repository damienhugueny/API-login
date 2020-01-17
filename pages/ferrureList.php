<?php session_start();
//Chargement de la liste des chevaux
include '../api/config/database.php' ;
include '../fonction/function.php'
?>

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



    <header>
        <div class="container__nav">

            <div>
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
    <?php $ferrureList = getferrureListe()?>
    <?php $nbcl=1?>
    
    <div class="containerTitresListe">
        <h2>Ferrures</h2>
    </div>
    
        <?php foreach($ferrureList as $list):?>
    
            <div class="container containers<?=$nbcl?>">
                <div class="container--chevauxFerrure">
                    <div class="container--chevauxFerrure--block">
                        <span>📅</span><?=$list['date'];?>
                    </div>
                    <div class="container--chevauxFerrure--block">
                        <?=$list['Commentaire'];?>
                    </div>
                </div>
            </div>
            <?php $nbcl+=1?>
        <?php endforeach ?>
    

        <div class="containerTitresListe">
         <h2>Vermifuges</h2>
        </div>

        <?php $nbcl=1?>
        <?php $vermifugeUserList = getVermifugeUserListe()?>
        <?php foreach($vermifugeUserList as $vermifugeList):?>
    
        <div class="container containers<?=$nbcl?>">
            <div class="container--chevauxFerrure">
                <div class="container--chevauxFerrure--block">
                    <span>📅 </span><?=$vermifugeList['date'];?>
                </div>
                <div class="container--chevauxFerrure--block">
                    <?=$vermifugeList['typeVermifuge'];?>
                </div>
                <div class="container--chevauxFerrure--block">
                    <?=$vermifugeList['Commentaire'];?>
                </div>
                

            </div>
        </div>
        <?php $nbcl+=1?>
        <?php endforeach ?>


    </div>   

    <footer>
    <!-- TODO LE FOOTER-->
        <div class="AddCheval">
        
        <?php
        $chevauxList = getChevalUserList($_SESSION['name']);
         include '../template/addEventChevaux-tpl.php' ?>
        </div>
        <button class="accordion">+</button>
        <a href="../home.php?user=<?=$_SESSION['id']?>"><button class="home">&laquo;</button></a>
<div class="container__date">
    <p><?=date("Y-m-d")?></p>
</div>

</footer>




<script src="../script/scriptAccordeon.js"></script>
</body>
</html>
