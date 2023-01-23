<?php
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['tel']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/formulariostyle.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    
    <title>Cadastro de Clientes</title>
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

                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
</body>
</html>