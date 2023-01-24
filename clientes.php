<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) 
{
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('Location: home.php');
}

$logado = $_SESSION['nome'];

$sql = "SELECT *  FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Clientes Cadastrados</title>

  <style>
    body {
      background-color: black;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url(img/bg.versus.jpg);
      background-position: center top;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }

    .botao-voltar {
            background-color: rgb(187, 143, 33);
            color: aliceblue;
            font-size: 15px;
            font-weight: bold;
            border: none;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
    }

    .botao-voltar:hover {
        background-color: rgb(99, 72, 5);
        cursor: pointer;
        transition: 0.2s;
    }

    .table-bg {
      background: rgba(141, 114, 46, 0.6);
      border-radius: 15px 15px 0 0;
    }


  </style>
</head>

<body>
  <!-- Botao de voltar a página -->
  <a href="escolha.php"><button class="botao-voltar">Voltar</button></a>
  <br><br>
  <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Senha</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Sexo</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Logradouro</th>
                  <!-- Ações do editar e deletar registro -->
                  <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                      echo "<tr>";
                      echo "<td>".$user_data['id']."</td>";
                      echo "<td>".$user_data['nome']."</td>";
                      echo "<td>".$user_data['senha']."</td>";
                      echo "<td>".$user_data['email']."</td>";
                      echo "<td>".$user_data['telefone']."</td>";
                      echo "<td>".$user_data['sexo']."</td>";
                      echo "<td>".$user_data['data_nasc']."</td>";
                      echo "<td>".$user_data['cidade']."</td>";
                      echo "<td>".$user_data['estado']."</td>";
                      echo "<td>".$user_data['logradouro']."</td>";
                      echo "<td>
                          <a class= 'btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5     1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                          </a>
                        </svg>
                      </td>";
                      echo "</tr> ";                      
                    }
                ?>        
            </tbody>
        </table>
  </div>
</body>
</html>