<?php
require_once "felipeanderson.php";
require_once "mbappe.php";
require_once "palmeiras.php";
require_once "realmadrid.php";


$palmeiras = new palmeiras(new felipeanderson);
$palmeiras->contratacao();

echo "<br>";


$realmadrid = new realmadrid(new mbappe);
$realmadrid->contratacao();





?>

