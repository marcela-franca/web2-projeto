<?php

include("conexao.php");

if(isset($_POST['email']) && strlen($_POST['email'])> e){

    if(!isset($_SESSION))
        session_start();

    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));

    $sql_code = "SELECT senha, email FROM usuario WHERE email = '$_SESSION[email]'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_row;

    if($total == 0){
        $erro[] = "Este email não pertence à nenhum usuário.";

    }else{

        if($dado['senha'] == $_SESSION['senha']){

            $_SESSION['usuario'] = $dado['codigo'];

        }else{

            $erro[] = "Senha incorreta.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Sacramento&display=swap"
        rel="stylesheet">
</head>
<header>
    <nav>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Sobre</a>
            </li>
            <li class="barra">
                <a href="">Serviços</a>

                <div class="barra-menu">

                </div>
            </li>
            <li>
                <a href="">Contato</a>
            </li>
        </ul>
    </nav>
</header>

<body>
    <main>
        <div class="img">
            <img src="imagem/driving school-cuate.svg" alt="carro" width="500px" height="600px">
        </div>
        <div class="formulario">
            <div class="input">
                <p>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" placeholder="Digite seu email..."><br>
                    <label for="senha">Senha:</label><br>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha..."><br>
                </p>
                <div class="btn">
                    <button type="button" class="btn btn-lg btn-primary" disabled>Entrar</button>
                </div>
            </div>

        </div>

        </div>
    </main>

</body>

</html>