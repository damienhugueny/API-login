
<?php if(!empty($chevauxList)){?>

<form action="../controller/EventController.php" method="POST">
        
        <label for="addChevalEventCheval" >AJOUTER un événement

        <div class="container__input">
            <span >
                    <select class="formulaire" id="addChevalEventCheval" name="addChevalEventCheval">

                        <option value="">--Selectionner un cheval--</option>

                        <?php foreach($chevauxList as $chevaux): ?>

                        <option class="formulaire__opt" value="<?=$chevaux['cheval']?>"><?=$chevaux['cheval']?></option>
                        
                        <?php endforeach ?>
                    </select>
                </span>
            </label>
        </div>
            

        <div class="container__input">
            <span>
                <select class="formulaire" id="addChevalEventChevalType" name="addChevalEventChevalType">

                    <option class="formulaire__opt"  value="">--Selectionner une Catégorie--</option>

                    <option class="formulaire__opt" value="ferrure">Ferrure</option>
                    
                    <option  class="formulaire__opt" value="vermifuge">Vermifuge</option>
                    

                </select>
            </span>
        </div>

        <div id="contVermifuge" class="container__input container__input__vermifuge">
            <span>
                <select class="formulaire" id="addChevalEventChevalTypeVermifuge" name="addChevalEventChevalTypeVermifuge">

                    <option class="formulaire__opt"  value="">--Selectionner un Vermifuge--</option>

                    <?php $vermifugeList =  getVermifugesListe(); ?>
                    <?php foreach($vermifugeList as $verifuge):?>
                    <option class="formulaire__opt" value="<?= $verifuge['nom'] ?>"><?= $verifuge['nom'] ?></option>
                    <?php endforeach ?>
                  
                </select>
            </span>
        </div>
        

            <label for="addChevalEventChevalDate" class="addChevalEventChevalDate">Date</label>
            <div class="container__input">
                <input class="formulaire" id="addChevalEventChevalDate" name="addChevalEventChevalDate" type="date" class="input">
            </div>
        
       
            <label for="addChevalEventChevalCom" class="label">Commentaires </label> 
            <div class="container__input">
                <TEXTAREA id="addChevalEventChevalCom" name="addChevalEventChevalCom" rows=6 cols=40></TEXTAREA>
            </div>
        
    <input type="submit" class="button" value="addEvent">
    
</form>

<?php };?>

