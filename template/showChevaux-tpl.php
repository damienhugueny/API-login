<?php 

//affiche la liste des chevaux de user

echo "<p>Bonjour ".$_SESSION['name']."</p>" ;
echo "<ul>";


if(!empty($chevauxList)){
    foreach($chevauxList as $chevaux){
        echo '<li>'. $chevaux['cheval'].'</li>';
       
    }
   
}

else{
    echo '<li>'."vous n'avez pas encore de chevaux dans la liste".'</li>';
}


echo "</ul>";


?>