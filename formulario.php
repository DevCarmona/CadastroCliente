<?php
    if (isset($_POST['submit'])) 
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r(('<br>'));
        // print_r('Email: ' . $_POST['email']);
        // print_r(('<br>'));
        // print_r('Telefone: ' . $_POST['tel']);
        // print_r(('<br>'));
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r(('<br>'));
        // print_r('Data de Nascimento: ' . $_POST['data-nascimento']);
        // print_r(('<br>'));
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r(('<br>'));
        // print_r('Estado: ' . $_POST['estado']);
        // print_r(('<br>'));
        // print_r('Logradouro: ' . $_POST['logradouro']);
        // print_r(('<br>'));

    include_once(('config.php'));

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data-nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $logradouro = $_POST['logradouro'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,logradouro) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$logradouro')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        }

        legend {
            border: 1px solid rgb(187, 143, 33);
            padding: 5px;
            text-align: center;
            background-color: rgb(187, 143, 33);
            border-radius: 5px;
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
    <a href="escolha.html"><button class="botao-voltar">Voltar</button></a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Cliente</b></legend>
                <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="input-user" required>
                    <label for="nome" class="label-input">Email</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="number" name="tel" id="tel" class="input-user" required>
                    <label for="nome" class="label-input">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="Feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="Masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="Outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data-nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data-nascimento" id="data-nascimento" required>
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