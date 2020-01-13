<?php
$nome = "Andre";

// strtoupper - converte uma string em maiusculo;
$novonome = strtoupper($nome);
echo $novonome;
echo "<hr>";

// strtolower - converte uma string para minusculo;
$novonome = strtolower($nome);
echo $novonome;
echo "<hr>";

// substr - retorna uma parte da string
echo substr($nome, 2);
echo "<hr>";

// str_pad - complementa uma string com uma quantidade especifica de caracteres
$novonome = str_pad($nome, 10, "*");
echo $novonome;
echo "<hr>";

// str_repeat - repete uma string
$novonome = str_repeat($nome, 10);
echo $novonome;
echo "<hr>";

// strlen - retorna a quantidade de caracteres na string
$novonome = strlen($nome);
echo $novonome;
echo "<hr>";

// str_replace - substitui uma palavra da string por outra
$novonome = str_replace("Andre", "Gurgel", $nome);
echo $novonome;
echo "<hr>";

//str_pos - retorna a posição de uma palavra em um texto
$frase = "O rato roeu a roupa do rei de roma";
echo strpos($frase, "rei");
echo "<hr>";