<?php
include 'conexao.php';

include 'C:/wamp64/www/web2-projeto/cadastroAlu.php';

// Obtenha os dados enviados do frontend
// isset ->  caso uma variável não esteja definida, ela possui o valor nulo (null)
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$confSenha = isset($_POST['confSenha']) ? $_POST['confSenha'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
$complemento = isset($_POST[ 'complemento']) ? $_POST['complemento'] : null;
$aluno_celular = isset($_POST[ 'celular']) ? $_POST['celular'] : null;
$cep = isset($_POST['cep']) ? $_POST['cep'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$genero = isset($_POST[ 'genero']) ? $_POST['genero'] : null;
$categoria_cnh = isset($_POST['categoria_cnh']) ? $_POST['categoria_cnh'] : null;

// Verificar se o campo de data está preenchido
if (empty($data_nascimento)) {
    die("Erro: A data de nascimento é obrigatória.");
}

// Prepare a consulta SQL
$sql = "INSERT INTO alunos (aluno_nome, aluno_senha, aluno_confSenha, aluno_cpf, aluno_data_nascimento, aluno_endereco, aluno_complemento, aluno_celular, aluno_cep,  aluno_email, aluno_genero, aluno_categoria_cnh) 
        VALUES ('$nome', '$senha', '$confSenha', '$cpf', '$data_nascimento', '$endereco', '$complemento', '$aluno_celular', '$cep', '$email', '$genero', '$categoria_cnh')";

// Executa a consulta
if ($conn->query($sql) === TRUE) {
    echo "Novo aluno cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
<html>
    <body>
        <h1></h1>
    </body>
</html>