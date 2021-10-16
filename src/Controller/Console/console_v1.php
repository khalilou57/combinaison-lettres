<?php
require_once(__DIR__."/../../../vendor/autoload.php");
use App\Controller\Combinaison as Combinaison;

$listCombinaisons = Combinaison::listCombinaisonsAlex();

echo "<pre>";
print_r($listCombinaisons);
echo"</pre>";