<?php

include("clsCategoria.php");
include_once("clsProduto.php");

    $c1 = new categoria(01, "Frutas");
    
    $p1 = new produto(01, "Maçã", 3.3, 4, $c1);
    $p3 = new produto(03, "Pêra", 3.2, 4, $c1);
    echo $p1->name . " - Preço: R$" . $p1->preco;
    echo "<br>" . $p3->name . " - Preço: R$" . $p3->preco;
