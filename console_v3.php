<?php 
echo "Veuillez entrer au moins 2 lettres séparées par un espace: ".PHP_EOL;
$input = readline();
$pattern = '/[[a-zA-Z]{1}\s]*/';
if(!empty(trim($input))){
    //echo $input;
    $result = preg_grep($pattern, explode("\n", trim($input)));
      //  print_r($result);
    if(!empty($result)){
      //  echo 'yesssssssss';
        $choixLettres =  explode(" ", $result[0]);
        $countLetters = array_count_values($choixLettres);
        foreach($choixLettres as $index=>$item){
            if($countLetters[$item] >=2 || is_numeric($item) || (is_string($item) && strlen($item) > 1)){
                echo "Erreur:: N'accepte que des lettres et pas de lettre répétée";
                exit;
            }
        }
        print_r($choixLettres);
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


    }else{echo "Erreur:: Veuillez entrer que des lettres séparés par un espace: ".PHP_EOL;}
}