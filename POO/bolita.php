<?php

include("clsCategoria.php");
include_once("clsProduto.php");

    $c1 = new categoria(01, "Frutas");
    
    $p1 = new produto(01, "Maçã", 3.3, 4, $c1);
    echo $p1->name;