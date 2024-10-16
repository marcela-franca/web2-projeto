<?php
include ('conexao.php');

$mysqli = "SELECT * FROM alunos ORDER BY aluno_id DESC";

$result = $conn->query($mysqli);

print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar Aluno</title>
</head>
<body>
    <div>
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Conf Senha</th>
      <th scope="col">CPF</th>
      <th scope="col">Nascimento </th>
      <th scope="col">Endereço</th>
      <th scope="col">Complemento</th>
      <th scope="col">Celular</th>
      <th scope="col">Cep</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['aluno_id']. "td";
            echo "<td>".$user_data['aluno_nome']. "td";
            echo "<td>".$user_data['aluno_senha']. "td";
            echo "<td>".$user_data['aluno_confSenha']. "td";
            echo "<td>".$user_data['aluno_cpf']. "td";
            echo "<td>".$user_data['aluno_data_nascimento']. "td";
            echo "<td>".$user_data['aluno_endereco']. "td";
            echo "<td>".$user_data['aluno_complemento']. "td";
            echo "<td>".$user_data['aluno_celular']. "td";
            echo "<td>".$user_data['aluno_cep']. "td";
            echo "<td>".$user_data['aluno_email']. "td"; 
            echo "<td> 
                    <a class='btn btn-primary' href='editAlu.php?aluno_id=$user_data[aluno_id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill-x' viewBox='0 0 16 16'>
                        <path d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4'/>
                        <path d='M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708'/>
                    </svg>
            </td>";
            echo "</tr>";      

        }
    ?>
  </tbody>
</table>
    </div>
    
</body>
</html>