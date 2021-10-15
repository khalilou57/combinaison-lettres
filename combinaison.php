<?php 

$choixLettres = array('A','L','E','X');
$nbLettres = $compteur = count($choixLettres);
$nbPossibilites = 1;

while($compteur >=1){
    $nbPossibilites *= $compteur;
    $compteur--;
}
echo "----------------------------------
$nbLettres lettres donnent $nbPossibilites possibilités
----------------------------------".PHP_EOL;

$combinaison = strval(implode("", $choixLettres)); 
$listCombinaisons[] = $combinaison;

while(count($listCombinaisons) < $nbPossibilites){
    $combinaison = str_shuffle($combinaison); 
    if(!in_array($combinaison, $listCombinaisons)){
        //echo '- '.$combinaison.PHP_EOL;
        $listCombinaisons[] = $combinaison;
    }
}

sort($listCombinaisons);
echo "<pre>";
print_r($listCombinaisons);
echo"</pre>";