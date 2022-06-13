<?php


$gasolina = $_GET["gasolina"];
$etanol = $_GET["etanol"];
$escolha = $_GET["escolha"];


//echo("Com oque você quer abastecer?");

if($escolha == "gasolina"){
    echo("Você está abastecendo com gasolina!");
} else {
    echo("Você está abastecendo com etanol!");
}
