<?php
    
include ("clsCidade.php");
include_once ("clsPessoa.php");

    $c1 = new cidade();
    $c2 = new cidade("Porto Alegre");

    $p1 = new pessoa(42, "Bola");
    $p2 = new pessoa(23, "Carlos", 1.9, $c2);
    $p3 = new pessoa(15, "China", 1.7, $c1);
    $p4 = new pessoa(36, "Bolita", 3.6, new cidade("Morrocos"));

    print($p1->name . " - " . $p1->cidade->name . " - " . $p1->id);
    print("<br>" . $p2->name . " - " . $p2->cidade->name . " - " . $p2->id);
    print("<br>" . $p3->name . " - " . $p3->cidade->name . " - " . $p3->id);
    print("<br>" . $p4->name . " - " . $p4->cidade->name . " - " . $p4->id);
    