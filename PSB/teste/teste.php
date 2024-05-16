<?php
require_once("class.php");

//BOLASTÍCO

$xinamen = new Xinaman(1,"Chines","XinaMen");
$xinamen->status();
echo "<br>";
$buela = new Bolaman(17,"bolita","Mi nombre és bola");
$buela->status();
echo "<br>";
$carlos = new Carlos(41,"Carlos");
$array = array($xinamen, $buela, $carlos);
foreach($array as $StatusQuo){
    $StatusQuo->SerXines();
    echo "<br>";
}
$array2 = [$buela,$carlos];
foreach($array2 as $StatusQuo2){
    $StatusQuo2->bonoro();
}

trait Bonoro{
    public $bonoro = "Bonoro?";
    public function bonoro(){
        echo "Mi nombre és <br>" . $this->bonoro . "<br>";
    }
}
