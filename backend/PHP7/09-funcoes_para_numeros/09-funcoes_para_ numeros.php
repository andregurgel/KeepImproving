<?php
$db = 1234.56;

// number_format
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo "<hr>";

// round - arredonda valores
echo round(3.6);
echo "<hr>";

// ceil - arredonda sempre pra cima
echo ceil(3.6);
echo "<hr>";

// floor - arredonda sempre pra baixo
echo floor(3.6);
echo "<hr>";

// rand - gera numero randomico
echo rand(1, 20);
echo "<hr>";