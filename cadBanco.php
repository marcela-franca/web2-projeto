<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Cadastro</title>
    <link rel="stylesheet" href="css/cadBanco.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
</head>
<body>
        <div>
            <table>
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Celular</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Genero</th>
                    <th scope="col">...</th>
                    
                </tr>
                
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']. "</td>";
                        echo "<td>".$user_data['Nome']. "</td>";
                        echo "<td>".$user_data['Email']. "</td>";
                        echo "<td>".$user_data['Senha']. "</td>";
                        echo "<td>".$user_data['Endereco']. "</td>";
                        echo "<td>".$user_data['Complemento']. "</td>";
                        echo "<td>".$user_data['Celular']. "</td>";
                        echo "<td>".$user_data['CPF']. "</td>";
                        echo "<td>".$user_data['Genero']. "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            </table>

        </div>
</body>
</html>