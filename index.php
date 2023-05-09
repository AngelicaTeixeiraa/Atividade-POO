<?php


require "./php/Cliente.php";
 $cliente = new Cliente();

 $cliente->setNome("Angélica");
$cliente->setCpf(121231212);
$cliente->setDataNasc(2005);
$cliente->setEndereco("ASDKASLDASDKAS");
$cliente->setEmail("angelica@fatec.sp.gov.br");
$cliente->setTelefone(18998240548);
$cliente->verificarMaiorIdade();


