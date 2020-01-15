<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanitize Filters</title>
</head>
<body>
    <?php
        $erros = array();

        // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "$nome <br>";

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        echo "$idade <br>";

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        echo "$email <br>";

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_EMAIL);
        echo "$url <br>";

        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li> $erro </li>";
            }
        }else{
            echo "Parabens seus dados estão corretos!";
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br> 
        <button type="submit" name="enviar-formulario"> Enviar </button>
    </form>
</body>
</html>