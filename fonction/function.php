<?php 
//calcul de la différence entre 2 dates
function calculDate($dateFerrure){
    $datetime2 = date_create(date("Y-m-d")); 
    $datetime1 = date_create($dateFerrure); 
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format('%R%a');   
}

//floor retourne un nombre sans virgule
//$ir valeur a mettre en %
//$max corespond a la valeur 100%
function pourcentage($ir,$max){
    $result = ($ir*100)/$max;
    if($result>=100){
    $result=100;
    }
    if($result<=0){
        $result=0;
        }

    return floor($result);
}

function couleur($nb){
    
    if($nb>=75){
        return $couleur="border-color: red";
    }

    if($nb>=50){
        return $couleur="border-color: orange";
    }
    else{
        return $couleur="border-color: green";
    }

}
/*$dateFerrure = "2019-12-01";
$res= calculDate($dateFerrure);
var_dump($res);
$toto =pourcentage($res,55);
var_dump($toto);*/
?>