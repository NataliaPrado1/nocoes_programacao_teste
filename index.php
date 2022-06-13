<?php
$variavel = 'teste';
$variavel2 = 'taruma';
$nome = 'Natalia';
$id = '23';

echo "<center>";
    if($variavel2 == 'taruma'){
    echo "é tarumã!";
    }else if($variavel2 == 'assis'){
    echo "é assis";
    }else{
    echo "não é tarumã";
    }
echo "</center>";

echo "<center>";
    echo $variavel;
    echo "<br>";
    echo $variavel2;
    
echo "</center>";
$variavel = 743;
//$variavel2 = 197;
//$soma = $variavel + $variavel2;
//echo "<br>O valor da soma é: $soma<br>";
echo "<center>";
    echo "O meu nome é $nome<br>";
    echo "Eu tenho $id anos<br>";
    $test = True;
    $test2 = False;
    echo $test;
echo "</center>";



?>