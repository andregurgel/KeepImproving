<?php
// Conexão
require_once '../backend/db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-entrar'])){
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo login/senha precisa ser preenchido. </li>";
    }else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            }else{
                $erros[] = "<li> Usuário e Senha não conferem. </li>";
            }

        }else{
            $erros[] = "<li> Usuário inexistente. </li>";
        }
    }
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
        <?php
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
            }
        ?>
    </div>
</body>
</html>