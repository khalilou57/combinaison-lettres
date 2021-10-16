<?php 
namespace App\Controller;

class Combinaison {
    
function listCombinaisonsAlex():array{
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
    return $listCombinaisons;
}


function getListCombinaisons(array $inputList) :array{
    $inputListString = implode(" ", $inputList);
    //print_r($inputList);
    $pattern = '/[[a-zA-Z]{1}\s]*/';
    if(!empty(trim($inputListString))){
        $result = preg_grep($pattern, explode("\n", trim($inputListString)));
        if(!empty($result)){
            $choixLettres =  explode(" ", $result[0]);
            $countLetters = array_count_values($choixLettres);
            foreach($choixLettres as $index=>$item){
                if($countLetters[$item] >=2 || is_numeric($item) || (is_string($item) && strlen($item) > 1)){
                    return array('erreur' =>"N'accepte que des lettres et pas de lettre répétée");
                    exit;
                }
            }
            $nbLettres = $compteur = count($choixLettres);
            $nbPossibilites = 1;
    
            while($compteur >=1){
                $nbPossibilites *= $compteur;
                $compteur--;
            }
    
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
            return array(
                'nbLettres' => $nbLettres,
                'lettresChoisies' => $inputListString,
                'nbPossibilites' => $nbPossibilites,
                'listCombinaisons' => $listCombinaisons
            );
    
    
        }else{
            return array('erreur'=>'Veuillez entrer que des lettres séparés par un espace');
        }
    }
    }
}