<?php
$nome = "André Gurgel";
$a = 1;
$b = 3;
$c = 7;


function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
echo "<hr>";