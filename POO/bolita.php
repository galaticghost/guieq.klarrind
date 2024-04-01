<?php

include("clsCategoria.php");
include_once("clsProduto.php");

    $c1 = new categoria(01, "Frutas");
    
    $p1 = new produto(01, "Maçã", 3.3, 4, $c1);
    $p2 = new produto(02, "Banana", 4.1, 5, $c1);

    echo $p1->name . " - Preço R$:" . $p1->preco;
    echo $p2->name . " - Preço R$:" . $p2->preco;