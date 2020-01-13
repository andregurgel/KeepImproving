<?php
// is_array - verifica se a variavel é array
$nomes = array("André", "Bruna", "Iago", "Andrea");
if(is_array($nomes)){
    echo "É um array!";
}else{
    echo "Não é um array!";
}
echo "<hr>";

// in_array - verifica se algum valor existe dentro do array
if(in_array("Bruno", $nomes)){
    echo "Existe dentro do array!";
}else{
    echo "Não existe no array!";
}
echo "<hr>";

// array_keys
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

// array_values - retorna os valores do array passado como parametro
$values = array_values($nomes);
print_r($values);
echo "<hr>";

// array_merge - agrega o conteúdo de 2 arrays
$sobrenomes = array("Gurgel", "Santos", "Medici", "Carla");
$merge = array_merge($nomes, $sobrenomes);
print_r($merge);
echo "<hr>";

// array_pop -  exclui a ultima posição do array
print_r($nomes);
echo "<br>";
array_pop($nomes);
print_r($nomes);
echo "<hr>";

// array_shift - exclui a primeira posição do array
print_r($nomes);
echo "<br>";
array_shift($nomes);
print_r($nomes);
echo "<hr>";

// array_unshift - adiciona um ou mais valores no inicio do array
print_r($nomes);
echo "<br>";
array_unshift($nomes, "Andre", "Andrea");
print_r($nomes);
echo "<hr>";

// array_push - adiciona um ou mais valores no fim do array
print_r($nomes);
echo "<br>";
array_push($nomes, "Laisa", "Germana");
print_r($nomes);
echo "<hr>";

// array_sum - soma os elementos do array
$soma = array(21, 53, 52, 14, 24);
echo array_sum($soma);
echo "<hr>";

// explode - transfoma uma string em array
$data = "30/02/2020";
$novadata = explode('/', $data);
print_r ($novadata);
echo "<hr>";

// implode - transforma um array em string
$datanormal = implode('/', $novadata);
echo $datanormal;
echo "<hr>";