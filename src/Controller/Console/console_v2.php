<?php 
echo "Veuillez choisir le nombre de lettre: ".PHP_EOL;
$inputChiffre = readline();

if(!empty(trim($inputChiffre)) && is_numeric($inputChiffre)){
    echo "Veuillez entrer au moins $inputChiffre lettres séparées par un espace: ".PHP_EOL;
    $inputLettres = readline();
    $patternLettres = '/[[a-zA-Z]{1}\s]*/';
    if(!empty(trim($inputLettres))){
        //echo $input;
        $verifLettres = preg_grep($patternLettres, explode("\n", trim($inputLettres)));

        if(!empty($verifLettres)){
        //  echo 'yesssssssss';
            $choixLettres =  explode(" ", $verifLettres[0]);
           // echo  "nb lettres: ".count($choixLettres);
            //------------
            if(count($choixLettres) == $inputChiffre){
                $countLetters = array_count_values($choixLettres);
                foreach($choixLettres as $index=>$item){
                    if($countLetters[$item] >=2 || is_numeric($item) || (is_string($item) && strlen($item) > 1)){
                        echo "Erreur:: N'accepte que des lettres et pas de lettre répétée";
                        exit;
                    }
                }
                //print_r($choixLettres);
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
        }else{
            echo 'Vous aviez choisi '.$inputChiffre.' lettres à combiner mais seules '.count($choixLettres).' lettres ont été entrées'.PHP_EOL;
        }
//--------
        }else{echo "Erreur:: Veuillez entrer que des lettres séparés par un espace: ".PHP_EOL;}
    }
}else{
    echo 'veuillez choisir un nombre';
}