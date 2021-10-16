<?php 
require_once("../vendor/autoload.php");
use App\Controller\Combinaison as Combinaison;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Combinaison lettres</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container" class="container">
    <?php 
                //require_once("src/Utils/utils_v1.inc");

                $listCombinaisons = Combinaison::listCombinaisonsAlex();
                ?>
            <h1><?php echo count($listCombinaisons)?> Combinaisons possibles avec les 4 lettres A L E X</h1>
            <a class="btn btn-info" href="#" id="toggle_div1"><i></i>Voir</a>
            <div id="choix-lettres-1">
                <?php 
                echo '<table><th>Index</th><th>Combinaison</th>';
                foreach($listCombinaisons as $index=> $item){
                    if($index%2 !==0){$classeRow='paire';}else{$classeRow='impaire';}
                echo '<tr class="'.$classeRow.'"><td>'.$index.'</td><td>'.$item.'</td></tr>';
                }
                echo '</table>';
                ?>
            </div>
            <h1>Choisir les lettres à combiner</h1>
            <a class="btn btn-info" href="#" id="toggle_div2"><i></i>Voir</a>
            <div id="choix-lettres-2">

                <form id="form-lettres" method="post">
                    <div id="form-checkbox">
                        <div id="row-1" class="form-flex-row">
<input type="checkbox" name="A" id="letter-A" value="A" /> <label for="letter-A">A</label>
<input type="checkbox" name="B" id="letter-B" value="B"  /> <label for="letter-B">B</label>
<input type="checkbox" name="C" id="letter-C" value="C"  /> <label for="letter-C">C</label>
<input type="checkbox" name="D" id="letter-D" value="D"  /> <label for="letter-D">D</label>
<input type="checkbox" name="E" id="letter-E" value="E"  /> <label for="letter-E">E</label>
<div>
<div id="row-2" class="form-flex-row">
<input type="checkbox" name="F" id="letter-F" value="F"  /> <label for="letter-F">F</label>
<input type="checkbox" name="G" id="letter-G" value="G"  /> <label for="letter-G">G</label>
<input type="checkbox" name="H" id="letter-H" value="H"  /> <label for="letter-H">H</label>
<input type="checkbox" name="I" id="letter-I" value="I"  /> <label for="letter-I">I</label>
<input type="checkbox" name="J" id="letter-J" value="J"  /> <label for="letter-J">J</label>
            </div>
            <div id="row-3" class="form-flex-row">
<input class="" type="checkbox" name="K" id="letter-K" value="K"  /> <label for="letter-K">K</label>
<input type="checkbox" name="L" id="letter-L" value="L"  /> <label for="letter-L">L</label>
<input type="checkbox" name="M" id="letter-M" value="M"  /> <label for="letter-M">M</label>
<input type="checkbox" name="N" id="letter-N" value="N"  /> <label for="letter-N">N</label>
<input type="checkbox" name="O" id="letter-O" value="O"  /> <label for="letter-O">O</label>
            </div>
            <div id="row-4" class="form-flex-row">
<input type="checkbox" name="P" id="letter-" value="P"  /> <label for="letter-P">P</label>
<input type="checkbox" name="Q" id="letter-" value="Q"  /> <label for="letter-Q">Q</label>
<input type="checkbox" name="R" id="letter-" value="R"  /> <label for="letter-R">R</label>
<input type="checkbox" name="S" id="letter-" value="S"  /> <label for="letter-S">S</label>
<input type="checkbox" name="T" id="letter-" value="T"  /> <label for="letter-T">T</label>
            </div>
            <div id="row-5" class="form-flex-row">
<input type="checkbox" name="U" id="letter-U" value="U"  /> <label for="letter-U">U</label>
<input type="checkbox" name="V" id="letter-V" value="V"  /> <label for="letter-V">V</label>
<input type="checkbox" name="W" id="letter-W" value="W"  /> <label for="letter-W">W</label>
<input type="checkbox" name="X" id="letter-X" value="X"  /> <label for="letter-X">X</abel>
<input type="checkbox" name="Y" id="letter-Y" value="Y"  /> <label for="letter-Y">Y</label>
            </div>
            <div id="row-6" class="form-flex-row">
            <input type="checkbox" name="Z" id="letter-Z" value="Z"  /> <label for="letter-Z">Z</label>
            </div>
            <div id="row-7" class="form-flex-row">
                <input class="btn btn-success" type="submit" name="submit" value="Lister les combinaisons" />
            </div>
            </div>
                </form>
                <?php
                   if(!empty($_POST['submit'])){
//print_r($_POST);
 unset($_POST['submit']);
 $listCheckbox = $_POST;
 if(count($listCheckbox) < 2){
echo '<div class="error">Veuillez choisir au moins 2 lettres</div>';
 }else{
    // require_once('src/Utils/utils_v3.inc');
     $listCombinaisons = Combinaison::getListCombinaisons($listCheckbox);
     if(count($listCombinaisons) !=0){
if(count($listCombinaisons) == 1){
echo "<div class='error'>".$listCombinaisons['erreur']."</div>";
}else{

echo '<table><div id="caption"class="shadow-lg p-3 mb-5 bg-white rounded">Pour les <strong>'.$listCombinaisons['nbLettres'].'</strong> lettres choisies: <strong>'.$listCombinaisons['lettresChoisies'].'</strong>, il y a <strong>'.$listCombinaisons['nbPossibilites'].'</strong> combinaisons possibles</div>
<th>Index</th><th>Combinaison</th>';
                foreach($listCombinaisons['listCombinaisons'] as $index=> $item){
                    if($index%2 !==0){$classeRow='paire';}else{$classeRow='impaire';}
                echo '<tr class="'.$classeRow.'"><td>'.$index.'</td><td>'.$item.'</td></tr>';
                }
                echo '</table>';
}
     }
 }
                   }
                ?>
            </div>
    </div>
    <script type="text/javascript" src="public/assets/js/combinaison.js"></script>
</body>
</html>

