<?php
include ('conexao.php');

// Valida se os campos email e senha possuem informações

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == ''){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == ''){
        echo "Preencha sua senha";
    }else {
        //Para se evitar SQL injection
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if(quantidade == 1){

            $alunos = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $alunos['id'];
            $_SESSION['nome'] = $alunos['nome'];

            header("Location: agenda.php");

        }else {

            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }

       
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Cadastro</title>
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
    <div class="formulario-img">
        <img src="imagem/Sign up-rafiki.svg" alt="" width="600">
    </div>
    <div class="formulario">
        <form id="inserirAluno" method="POST">
            <div class="formulario-header">

                <div class="title">
                    <h1>Cadastro</h1>
                </div>

                <div class="input_group">
                    <div class="input_box">
                        <div class="input">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" placeholder="Ex:albert@gmail.com" required><br>
                        </div>
                        <div class="input">
                            <label for="senha">Senha</label><br>
                            <input type="password" name="senha" id="password" placeholder="Digite sua senha..."
                                required><br>
                        </div>
                        <div class="input">
                            <label for="confSenha">Confirme a Senha</label><br>
                            <input type="password" name="confSenha" id="password"
                                placeholder="Insira novamente sua senha..." required><br>
                        </div>
                        <div class="input">
                            <label for="nome">Nome</label><br>
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" required><br>
                        </div>
                        <div class="input">
                            <label for="Endereco">Endereço</label><br>
                            <input type="text" name="endereco" id="Endereco" placeholder="Endereço completo"
                                required><br>
                        </div>
                        <div class="input">
                            <label for="Complemento">Complemento</label><br>
                            <input type="text" name="complemento" id="Complemento" placeholder="Caso haja completo"
                                required><br>
                        </div>
                        <div class="input">
                            <label for="Celular">Celular</label><br>
                            <input type="tel" name="celular" id="number" placeholder="(xx)xxxxx-xxxx" required>
                        </div>
                        <div class="input">
                            <label for="CPF">CPF</label><br>
                            <input type="text" name="cpf" id="number" placeholder="Insira seu CPF" required>
                        </div>
                        <div class="input">
                            <label for="Data de Nascimento">Data de Nascimento</label><br>
                            <input type="date" name="data_nascimento" id="date" placeholder="DD/MM/YYYYY" required>
                        </div>
                        <div class="input">
                            <label for="CEP">CEP</label><br>
                            <input type="text" name="cep" id="number" placeholder="Insira seu CPF" required>
                        </div>

                        <div class="container-genero">
                            <div class="genero-titulo">
                                <h6>Gênero:</h6><br><br><br><br><br>
                            </div>
                            <div class="genero-box">
                                <div class="genero-input">
                                    <input type="radio" id="Female" name="genero">
                                    <label for="Female">Feminino</label>
                                </div>

                                <div class="genero-box">
                                    <input type="radio" id="Others" name="genero">
                                    <label for="Others">Outros</label>
                                </div>

                                <div class="genero-box">
                                    <input type="radio" id="male" name="genero">
                                    <label for="male">Masculino</label>
                                </div>

                                <div class="genero-box">
                                    <input type="radio" id="none" name="genero">
                                    <label for="none">Prefiro não informar</label>
                                </div><BR>
                            </div>
                        </div>

                        <div class="container-categoria">
                            <div class="categoria-titulo">
                                <h6>Categoria:</h6><br><br><br><br><br>
                            </div>
                            <div class="categoria-box">
                                <div class="categoria-input">
                                    <input type="radio" id="" name="categoria_cnh" value="A">
                                    <label for="Female">-----------A-----------</label>
                                </div>

                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="B">
                                    <label for="Others">-----------B-----------</label>
                                </div>

                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="AB">
                                    <label for="male">----------A/B----------</label>
                                </div>

                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="D">
                                    <label for="none">-----------D-----------</label>
                                </div>
                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="AD">
                                    <label for="none">----------A/D----------</label>
                                </div>
                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="E">
                                    <label for="none">-----------E-----------</label>
                                </div>
                                <div class="categoria-box">
                                    <input type="radio" id="" name="categoria_cnh" value="AE">
                                    <label for="none">----------A/E----------</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="btn-continuar">
                    <button type="submit">Continuar</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('cadastroAlu').addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('inserirAluno.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    alert(data);  // Mostra a resposta do PHP (sucesso ou erro)
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        });
    </script>
</body>

</html>