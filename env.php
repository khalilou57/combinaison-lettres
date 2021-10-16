<?php
$project = dirname(__DIR__).'/combinaison-lettres/';
$project =  str_replace('\\','/', $project);
define('BASE_PATH', $project);

//echo BASE_PATH;
$site_path_var = $_SERVER["SITE_HTMLROOT"];
echo $site_path_var;