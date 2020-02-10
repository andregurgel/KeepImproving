<?php
// String
$nome = "André";
var_dump($nome);
echo "<hr>";

// Integer
$idade = 21;
var_dump($idade);
echo "<hr>";

// Float
$altura = 1.78;
var_dump($altura);
echo "<hr>";

// Boolean
$admin = false;
var_dump($admin);
echo "<hr>";

// Array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
echo "<hr>";

// Objeto
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = New Cliente();
$cliente->atribuirNome("Augusto");
var_dump($cliente);
echo "<hr>";

// Null
$cidade = NULL;
var_dump($cidade);
echo "<hr>";