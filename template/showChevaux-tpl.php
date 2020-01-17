<?php 

include './fonction/function.php';
include './api/config/database.php';
//affiche la liste des chevaux de user
$nb=1;


$chevauxList =getChevalUserList($_SESSION["name"]);


if(!empty($chevauxList)){
    foreach($chevauxList as $chevaux): ?>

    
    
  
        <div class="container--chevaux container<?=$nb?>">
            <a href="./pages/ferrureList.php?id=<?=$chevaux['cheval']?>">
                <h2><?=$chevaux['cheval']?></h2>
               
            <?php $ferrureList = getfirstFerrure($_SESSION["name"],$chevaux['cheval']);?>

           <?php foreach($ferrureList as $ferrure):?>

                <?php $re = calculDate($ferrure['date']);?>
                
                <div class="container__progressBar">
                
                    <div class="progress-circle" date="<?=$re?>" data-value="<?=pourcentage($re,42)?>">
                        <div class="progress-masque">
                            <div class="progress-barre" style="<?= couleur($re)?>"></div>
                            <div class="progress-sup50" style="<?= couleur($re)?>"></div>
                        </div>
                    </div>

                    <div class="container__fer">
                        <h4>Dernière ferrure :</h4>
                        <p><?=$ferrure['date']?></p>
                    </div>

                </div>
                    
                <?php if( pourcentage($re,42)== 100){ ?>
                <img class="icone--warning" src="./images/warning.png" alt="attention">
                <?php } ?>
                <?php endforeach ?>



                <?php $vermifugeDateList = getVermifugesListelast($_SESSION["name"],$chevaux['cheval']) ?>

                    
                <div class="container__progressBar">
                    <div class="container__vermifuge">
                        <h4>Dernier vermifuge :</h4>
                        <p><?=$vermifugeDateList['date']?></p>
                        <p><?=$vermifugeDateList['typeVermifuge']?></p>
                    </div>
               </div>
               
                
               

            </a>
        </div>

        <?php $nb= $nb+1; ?>
        
    <?php endforeach ?>
   
<?php } 

else{?>
    <div>
        <p>"vous n'avez pas encore de chevaux dans votre liste"</p>
    </div>    
<?php }?>