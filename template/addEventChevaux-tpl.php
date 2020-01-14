<?php if(!empty($chevauxList)){?>

<form action="./api/cheval/addChevalEvent.php" method="POST">
        
        <label for="addChevalEventCheval" >AJOUTER un événement</label>
        <select id="addChevalEventCheval" name="addChevalEventCheval">

            <option value="">--Selectionner un cheval--</option>

            <?php foreach($chevauxList as $chevaux): ?>

            <option value="<?=$chevaux['cheval']?>"><?=$chevaux['cheval']?></option>
            
            <?php endforeach ?>
        </select>

        <select id="addChevalEventChevalType" name="addChevalEventChevalType">

            <option value="">--Selectionner une Catégorie--</option>

            <option value="ferrure">Ferrure</option>

        </select>

        <label for="addChevalEventChevalDate" class="addChevalEventChevalDate">Date</label>
        <input id="addChevalEventChevalDate" name="addChevalEventChevalDate" type="date" class="input">


        <label for="addChevalEventChevalCom" class="label">Commentaires</label>
        <input id="addChevalEventChevalCom" name="addChevalEventChevalCom" type="text" class="input">

    <input type="submit" class="button" value="addEvent">
    
</form>

<?php };?>

