<?php

    include_once('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
    
<body>
    <div class="fundo">
    <header>
        <nav>
            <a class="logo" href=""><img src="imagens/cinbalColorida_resized.png" alt=""></a>
            <ul class="menu-list">
                <li>Inventário de Rede</li>
                <li>Tecnologia da Informação</li>
            </ul>
        </nav>
    </header>
    
    <main></main>

       <form action=""> 
        <div class="login">
            <h1>Login</h1>
            <br>
            <input type="text" placeholder="Usuário "id="login" >
            <br><br>
            <input type="password" placeholder="Senha" id="senha" >
            <br><br>
            <input class="button" type="submit" onclick="logar(); return false">
        </div>
        </form>

      <script>

        function logar(){


            var login = document.getElementById('login').value
            var senha = document.getElementById('senha').value


            if(login == "admin" && senha == "admin"){
                alert('Bem-vindo(a)!');
                location.href = "cadastrar.php";
        
            }else 
                alert('Usuário ou senha incorretos');
        }

      </script>  
</div>
   
</body>
</html>