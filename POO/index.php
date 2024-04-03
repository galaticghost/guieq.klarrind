<?php
    
include ("clsCidade.php");
include_once ("clsPessoa.php");
// Sem id
    $c1 = new cidade();
    $c2 = new cidade("Porto Alegre");

    $p1 = new pessoa(42, "Bola");
    $p2 = new pessoa(23, "Carlos", 1.9);
    $p3 = new pessoa(15, "China", 1.7, $c1);
    $p4 = new pessoa(36, "Bolita", 3.6, new cidade("Morrocos"));
    $p5 = new pessoa(07, "Carlos Eduardo", 1.85, new cidade("Cachoeira") );

    echo $p1->name . " - " . $p1->getCidade()->name . " - " . $p1->id;
    echo "<br>" . $p2->name . " - " . $p2->getCidade()->name . " - " . $p2->id;
    echo "<br>" . $p3->name . " - " . $p3->getCidade()->name . " - " . $p3->id;
    echo "<br>" . $p4->name . " - " . $p4->getCidade()->name . " - " . $p4->id;
    echo "<br>" . $p5->name . " - ID:" . $p5->id . " - ". $p5->getCidade()->name;
