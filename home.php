
<!-- Video ensinando a ligar o banco com o sistema -->
<!-- https://www.youtube.com/watch?v=QOeDE7nPDq0&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=3 -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tela de Login</title>

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

        .tela-login {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            padding: 80px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            color: aliceblue;
        }

        h1 {
            text-align: center;
            font-weight: bolder;
            font-size: 40px;
        }

        .login {
            padding: 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .botao-enviar {
            background-color: rgb(187, 143, 33);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: aliceblue;
            font-size: 15px;
            font-weight: bold;
        }

        .botao-enviar:hover {
            background-color: rgb(99, 72, 5);
            cursor: pointer;
            transition: 0.2s;
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
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input class="login" type="text" placeholder="Nome" name="nome" id="" required/>
            <br /><br />
            <input class="login" name="senha" type="password" placeholder="Senha" required/>
            <br /><br />
            <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </div>
</body>
</html>