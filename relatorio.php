<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/ralatorios.css">
  <title>Relatorios</title>
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
  <div class="container">
    <div class="container-img">
      <img src="imagem/5985256.jpg" alt="" width="600">
    </div>
    <div class="table">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Relatorios</th>
            <th scope="col">Setor</th>
            <th scope="col">Baixar CSV</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Faturamento Mensal</td>
            <td>Financeiro</td>
            <td>
              <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="checkbox" checked autocomplete="off"> Download
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Número de Matrículas</td>
            <td>Atendimento</td>
            <td>
              <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="checkbox" checked autocomplete="off"> Download
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Gasto Mensal</td>
            <td>Financeiro</td>
            <td>
              <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="checkbox" checked autocomplete="off"> Download
                </label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</body>

</html>