<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-entrar'])){
    echo "Clicou";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuários</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Sign In</h1>
            <form action="" method="POST">
                <label >Login</label>
                <input type="text" name="login"><br>
                <label >Senha</label>
                <input type="password" name="senha"><br>
                <button type="submit" name="btn-entrar">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>