
<?php if(!empty($chevauxList)){?>

    <form action="./controller/EventController.php" method="POST">
            
            <label for="removeCheval" >SUPPRIMER</label>
            <select id="removeCheval" name="removeCheval">

                <option value="">--Selectionner un cheval--</option>

                <?php foreach($chevauxList as $chevaux): ?>

                <option value="<?=$chevaux['cheval']?>"><?=$chevaux['cheval']?></option>
                
                
                <?php endforeach ?>
            </select>
        
        <input type="submit" class="button" value="remove">
        
    </form>

<?php } ?>






