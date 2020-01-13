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
    <title>home</title>
</head>
<body>
<!-- Chargement de la liste des chevaux -->
<?php include './api/config/databaseChevaux.php' ?>



    <header>
    <!-- TODO LE MENU-->
    <form class="sign-in-htm" action="./api/user/Logout.php" method="POST">
    <div class="group">
          <input type="submit" class="button" value="Log out">
        </div>
    </header>

    <main>
    
    </form>
        <?php include 'template/showChevaux-tpl.php' ?>
    
        <form class="sign-in-htm" action="./api/cheval/addCheval.php" method="POST">
        <div class="group">
          <label for="chevalname" class="label">Nom du cheval</label>
          <input id="chevalname" name="chevalname" type="text" class="input">
          <div class="group">
          <input type="submit" class="button" value="Ajouter">
        </div>
        </div>
        </form>
       
        <?php include './template/showRemove-tpl.php' ?>


    </main>




    <footer>
    <!-- TODO LE FOOTER-->
    </footer>
</body>
</html>