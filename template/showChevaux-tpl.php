<?php 

//affiche la liste des chevaux de user
$nb=1;

if(!empty($chevauxList)){
    foreach($chevauxList as $chevaux): ?>

        <div class="container--chevaux container<?=$nb?>">
            <h2><?=$chevaux['cheval']?></h2>

            <!--TRIE LA TABLE EN ordre décroissant et affiche la premiere ligne avec LIMIT 1-->
            <?php $sqlferrure = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$_SESSION["name"].'" 
            AND cheval ="'.$chevaux['cheval'].'" 
            ORDER BY `date` DESC LIMIT 1';
            $queryResult = $pdo ->query($sqlferrure);
            $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);?>
            
            <?php foreach($ferrureList as $ferrure):?>
                <div>
                    <h4>Dernière ferrure :</h4>
                    <p><?=$ferrure['date']?></p>
                </div>
                
               
                

            <?php endforeach ?>

        </div>
        <?php $nb= $nb+1; ?>
    <?php endforeach ?>
<?php } 

else{?>
    <div>
        <p>"vous n'avez pas encore de chevaux dans votre liste"</p>
    </div>    
<?php }?>