<?php
// Conexão
require_once '../backend/db_connect.php';

// Sessão
session_start();

//Verificação
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nome']; ?></h1>
    <a href="logout.php">Encerrar Sessão</a>
</body>
</html>