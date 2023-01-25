<?php
    session_start();
// print_r($_SESSION);
    if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: home.php');
}

$logado = $_SESSION['nome'];

    if (isset($_POST['submit'])) 
    {

    include_once(('config.php'));

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $logradouro = $_POST['logradouro'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,logradouro) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$logradouro')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Cadastro de Clientes</title>

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

        fieldset {
            border: 2px solid rgb(187, 143, 33);
            border-radius: 15px;
            padding: 15px;
        }

        legend {
            border: 1px solid rgb(187, 143, 33);
            padding: 2px;
            text-align: center;
            background-color: rgb(187, 143, 33);
            border-radius: 15px;
        }

        .box {
            color: aliceblue;
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            padding: 15px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            width: 325px;

        }

        .input-box {
            position: relative;
        }

        .input-user {
            background: none;
            border: none;
            border-bottom: 1px solid rgb(187, 143, 33);
            outline: none;
            color: aliceblue;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .label-input {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }

        #data-nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 13px;
        }

        .input-user:focus~.label-input,
        .input-user:valid~.label-input {
            padding-top: 5px;
            top: -20px;
            font-size: 12px;
            color: rgb(187, 143, 33);
        }

        #submit {
            background-color: rgb(187, 143, 33);
            width: 100%;
            border: none;
            padding: 15px;
            color: aliceblue;
            border-radius: 10px;
            font-size: 15px;
        }

        #submit:hover {
            background-color: rgb(99, 72, 5);
            cursor: pointer;
            transition: 0.2s;
        }
    </style>
</head>

<body>
    <!-- Botao de voltar a página -->
    <a href="escolha.php"><button class="botao-voltar">Voltar</button></a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Cliente</b></legend>
                <br><br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <div hidden class="input-box">
                    <input type="password" name="senha" id="senha" class="input-user">
                    <label for="senha" class="label-input">Senha</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="input-user" required>
                    <label for="nome" class="label-input">Email</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="number" name="telefone" id="telefone" class="input-user" required>
                    <label for="nome" class="label-input">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="logradouro" id="logradouro" class="input-user" required>
                    <label for="logradouro" class="label-input">Logradouro</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>