<?php
require "carro.php";

//instanciando objeto carro 1, ou seja, criando carro 1
$carro1 = new carro("classic", "cinza", "CPF-1234", 4);

$carro1->ligar();
$carro1->acelerar();
$carro1->frear();
$carro1-> acionarSeta("esquerda");

$carro1->set_cor("AMARELOOOOO");
$carro1->get_cor();

?>