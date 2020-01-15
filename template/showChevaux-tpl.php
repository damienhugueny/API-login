<?php 

include './fonction/function.php';

//affiche la liste des chevaux de user
$nb=1;

if(!empty($chevauxList)){
    foreach($chevauxList as $chevaux): ?>

    
    
  
        <div class="container--chevaux container<?=$nb?>">
            <a href="./pages/ferrureList.php?id=<?=$chevaux['cheval']?>">
                <h2><?=$chevaux['cheval']?></h2>

                <!--TRIE LA TABLE EN ordre décroissant et affiche la premiere ligne avec LIMIT 1-->
                <?php $sqlferrure = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$_SESSION["name"].'" 
                AND cheval ="'.$chevaux['cheval'].'" 
                ORDER BY `date` DESC LIMIT 1';
                $queryResult = $pdo ->query($sqlferrure);
                $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
                
                ?>
                
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