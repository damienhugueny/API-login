<?php session_start();
     //vérifie si on a pas taper l'adresse home.php dans la nav sans y être invité 
     if(!isset($_GET['user'])){
        $_GET['user']= 0;
    }
    
    if($_GET['user']!== $_SESSION['id']){
        echo '<p>'."erreur".'</p>';
       return;} ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
<!-- Chargement de la liste des chevaux -->
<?php include './api/config/databaseChevaux.php' ?>



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
        


    <main>
        <div class="container">
         <?php include 'template/showChevaux-tpl.php' ?>
        </div>

       

        <?php //include 'template/addChevaux-tpl.php' ?>
        
        <?php //include './template/showRemove-tpl.php' ?>

        <?php //include './template/addEventChevaux-tpl.php' ?>
    </main>

    
    <footer>
    <!-- TODO LE FOOTER-->
        <div class="AddCheval">
        <?php include 'template/addChevaux-tpl.php' ?>
        </div>

        <button class="accordion">+</button>


    </footer>

    <script src="./script/scriptAccordeon.js"></script>
</body>
</html>