<?php
require "./php/Produto.php";

// $produto1 = new Produto();
// $produto1->setNome("Camiseta estampada");
// $produto1->setMarca("Gucci");
// $produto1->setdescricao("camiseta estampada da marca gucci");
// $produto1->setValor(5, 00);
// $produto1->imprimir();


require "./php/Cliente.php";

// $cliente = new Cliente();

// $cliente->setNome("Angélica");
// $cliente->setCpf(121231212);
// $cliente->setDataNasc(2005);
// $cliente->setEndereco("ASDKASLDASDKAS");
// $cliente->setEmail("angelica@fatec.sp.gov.br");
// $cliente->setTelefone(18998240548);
// $cliente->verificarMaiorIdade();


require "./php/Professor.php";

//$professor = new Professor();

//$professor->setNome("Angelica");
//$professor->setCpf(12345123);
//$professor->setDataNasc(2005);
//$professor->setEmail("angelica@fatec.sp.gov.br");
//$professor->setTelefone(12121212);
//$professor->setMateria("Historia");
//$professor->imprimir();

require "./php/Disciplina.php";

$disciplina = new Disciplina();

$disciplina->setNome("Historia");
$disciplina->setCodigo(1);
$disciplina->setProfessorResponsavel("Angélica");
$disciplina->setCargaHorariaTotal("400 horas");
$disciplina->setTurmas("Historia");
$disciplina->setEmenta("Pré-História: período que abrange desde o surgimento do homem até o surgimento da escrita, por volta de 4000 a.C. Inclui o estudo das sociedades primitivas, da evolução biológica e cultural da espécie humana, das primeiras formas de organização social e da arte rupestre.

<br>História Antiga: período que vai desde o surgimento da escrita até a queda do Império Romano do Ocidente em 476 d.C. Inclui o estudo das civilizações antigas como a Mesopotâmia, Egito, Grécia e Roma, bem como o surgimento do cristianismo e a formação das primeiras sociedades medievais.

<br>Idade Média: período que se estende do fim do Império Romano do Ocidente até o século XV, com a expansão marítima europeia. Inclui o estudo das sociedades feudais, das cruzadas, do surgimento do islamismo, da Inquisição, das invasões bárbaras e das grandes epidemias.");
$disciplina->imprimir();



