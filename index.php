<?php   
    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['senha']);
        include_once('config.php');
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome', '$email', '$senha')");
    }
    
?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo2.css">
    <title>Aula_05</title>
</head>
<body>

<script src="./script/script.js"></script>
    <form name="formulario" method="POST"
    action="index.php">
    <img class="img" src="./img/sign-up-animate.svg" alt="">
        <div>
           
            <h1>Formulario de Cadastro</h1>
        <p class="p">
            Informe seu nome:
            <input class="digitacao" type="text" name="nome" placeholder="Informe o nome completo" autofocus required value= ''>
            
        </p>
        <p class="p">
            Informe seu E-mail:
            <input type="email" name="email" placeholder="Informe seu email" autofocus required value=''>
        </p>
        <p class="p">
            Informe sua senha:
            <input type="password" name="senha" placeholder="Informe sua senha" autofocus required value=''>
            
        </p>
        <input id="enviar" type="submit" value="Enviar" name="submit">
        <input id="limpar" type="submit" value="Limpar Campos" name="submit">

    </div>

    </form>
    
    
    
    
</body>
</html>