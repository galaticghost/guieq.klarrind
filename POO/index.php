<?php
    
include ("clsCidade.php");
include_once ("clsPessoa.php");
// Sem id
    $c1 = new Cidade();
    $c2 = new Cidade("Porto Alegre");

    $p1 = new Pessoa(42, "Bola");
    $p2 = new Pessoa(23, "Carlos", 1.9);
    $p3 = new Pessoa(15, "China", 1.7, $c1);
    $p4 = new Pessoa(36, "Bolita", 3.6, new Cidade("Morrocos"));
    $p5 = new Pessoa(07, "Carlos Eduardo", 1.85, new Cidade("Cachoeira") );

    echo $p1->name . " - " . $p1->getCidade()->name . " - " . $p1->id;
    echo "<br>" . $p2->name . " - " . $p2->getCidade()->name . " - " . $p2->id;
    echo "<br>" . $p3->name . " - " . $p3->getCidade()->name . " - " . $p3->id;
    echo "<br>" . $p4->name . " - " . $p4->getCidade()->name . " - " . $p4->id;
    echo "<br>" . $p5->name . " - ID:" . $p5->id . " - ". $p5->getCidade()->name;
