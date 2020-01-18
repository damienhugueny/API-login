<?php session_start();
     //vérifie si on a pas taper l'adresse home.php dans la nav sans y être invité 
     if(!isset($_GET['user'])){
        $_GET['user']= 0;
    }
    
    if($_GET['user']!== $_SESSION['id']){
        echo '<p>'."Ooopsss une petite erreur".'</p>';
        ?> <a href="index.php">retour à la page Login</a><?php
       return;} ?>
    

<?php require './template/header-tpl.php' ?>


    <div class="container__show">
        <main>
            <div class="container">
            <?php include 'template/showChevaux-tpl.php' ?>
            </div>

        

            <?php //include 'template/addChevaux-tpl.php' ?>
            
            

            <?php //include './template/addEventChevaux-tpl.php' ?>
        </main>

    </div>   

<footer>
    <!-- TODO LE FOOTER-->
        <div class="AddCheval">
        <?php include 'template/addChevaux-tpl.php' ?>
        </div>
        <div class="removeCheval"> 
        <?php include './template/showRemove-tpl.php'?>
        </div>
        <button class="accordion">+</button>
        <button class="remove">-</button>
        <div class="container__date">
        <p><?=date("Y-m-d")?></p>
        </div>

</footer>


<script src="./script/scriptAccordeon.js"></script>
</body>
</html>