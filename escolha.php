<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('Location: home.php');
}

$logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Tela de Cadastro e busca</title>

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

    .botao-sair {
      background-color: rgb(187, 143, 33);
      color: aliceblue;
      font-size: 15px;
      font-weight: bold;
      justify-content: end;
      border: none;
      padding: 10px;
      border-radius: 10px;
      margin: 5px;
    }

    .botao-sair:hover {
      background-color: brown;
      cursor: pointer;
      ransition: 0.2s;
    }

    .tela {
      background-color: rgba(0, 0, 0, 0.9);
      position: absolute;
      padding: 80px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 30px;
      color: aliceblue;
    }

    .botao {
      background-color: rgb(187, 143, 33);
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 10px;
      color: aliceblue;
      font-size: 20px;
      font-weight: bold;
    }

    .botao:hover {
      background-color: rgb(99, 72, 5);
      cursor: pointer;
      transition: 0.2s;
    }
  </style>
</head>

<body>
  <!-- Botao de voltar a página -->
  <a href="sair.php"><button class="botao-sair">Sair</button></a>
  <div class="tela">
    <a href="formulario.php"><button class="botao">Cadastrar Clientes</button></a>
    <br /><br /><br />
    <a href="#"><button class="botao">Buscar Clientes</button></a>
  </div>
</body>
</html>