<?php

include("clsCategoria.php");
include_once("clsProduto.php");

    $c1 = new Categoria(01, "Frutas");
    
    $p1 = new Produto(01, "Maçã", 3.3, 4, $c1);
    $p2 = new Produto(02, "Banana", 4.1, 5, $c1);
    $p3 = new Produto(03, "Pêra", 3.2, 4, $c1);
    
    echo $p1->name . " - Preço: R$" . $p1->preco;
    echo "<br>" . $p2->name . " - Preço: R$" . $p2->preco;
    echo "<br>" . $p3->name . " - Preço: R$" . $p3->preco;

