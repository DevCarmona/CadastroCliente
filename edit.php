<?php
    // Se nao estiver vazio
    if (!empty($_GET['id'])) 
    {

        include_once(('config.php'));

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $logradouro = $user_data['logradouro'];
            }
        }
        else
        {
            header('Location: escolha.php');
        }


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

        #update {
            background-color: rgb(187, 143, 33);
            width: 100%;
            border: none;
            padding: 15px;
            color: aliceblue;
            border-radius: 10px;
            font-size: 15px;
        }

        #update:hover {
            background-color: rgb(99, 72, 5);
            cursor: pointer;
            transition: 0.2s;
        }
    </style>
</head>

<body>
    <!-- Botao de voltar a página -->
    <a href="clientes.php"><button class="botao-voltar">Voltar</button></a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Cliente</b></legend>
                <br><br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" value="<?php echo $nome?>" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <br> 
                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="input-user" required>
                    <label for="senha" class="label-input">Senha</label>
                </div>
                <br>               
                <div class="input-box">
                    <input type="text" name="email" id="email" class="input-user" value="<?php echo $email?>" required>
                    <label for="nome" class="label-input">Email</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="number" name="telefone" id="telefone" class="input-user" value="<?php echo $telefone?>" required>
                    <label for="nome" class="label-input">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data-nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc?>" required>
                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" value="<?php echo $estado?>" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="logradouro" id="logradouro" class="input-user" value="<?php echo $logradouro?>" required>
                    <label for="logradouro" class="label-input">Logradouro</label>
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>

</html>