<?php

require_once "Carro.php";

$carroFilipe = new Carro();
$carroFilipe->numeroPortas = 4;
$carroFilipe->cor = "vermelho";

$carroMatheus = new Carro();
$carroMatheus->numeroPortas = 2;
$carroMatheus->cor = "verde";

$carroFilipe->buzinar();
$carroMatheus->buzinar();