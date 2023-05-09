<?php

require "./php/Produto.php";

 $produto1 = new Produto();
$produto1->setNome("Camiseta estampada");
 $produto1->setMarca("Gucci");
$produto1->setdescricao("camiseta estampada da marca gucci");
$produto1->setValor(5, 00);
$produto1->imprimir();


