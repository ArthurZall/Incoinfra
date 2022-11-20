<?php

    if(isset($_POST['cadastrar']))
    {
        // print_r('Tipo: ' . $_POST['tipo']);
        // print_r('<br>');
        // print_r('Marca: ' . $_POST['marca']);
        // print_r('<br>');
        // print_r('Nome ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Tag ' . $_POST['tag']);
        // print_r('<br>');
        // print_r('Sistema ' . $_POST['sistema']);
        // print_r('<br>');
        // print_r('Data da Última preventiva ' . $_POST['preventiva']);

        include_once('config.php');

        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $nome = $_POST['nome'];
        $tag = $_POST['tag'];
        $sistema = $_POST['sistema'];
        $preventiva = $_POST['preventiva'];

        $result = mysqli_query($conexao, "INSERT INTO maquinas(tipo,marca,nome,tag,sistema,preventiva) VALUES ('$tipo','$marca','$nome', '$tag','$sistema','$preventiva')");

    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilocadastro.css">
</head>
<body>

    <header>
        <nav>
            <img class="logo" src="imagens/cinbalColorida_resized.png" alt="">
            <a class="linksup" href="sistema.php">Máquinas Cadastradas</a>
        </nav>
    </header>
    
   
    <br><br>

<main></main>

    <div class="form">
    <form action="cadastrar.php" method="POST">
        <h2>Cadastrar Máquina</h2>
    <br><br>
        <select name="tipo" id="tipo" required>

            <option disabled selected value="">SELECIONE</option>
            <option value="DESKTOP">DESKTOP</option>
            <option value="NOTEBOOK">NOTEBOOK</option>
            <option value="TV">TV</option>
            <option value="THIN CLIENT">THIN CLIENT</option>

        </select>
    <br><br>
    <h2>Descrição</h2>   
    <br>
        <input type="text" id="marca" name="marca" placeholder="Marca" required>
    <br><br>
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
    <br><br>
        <input type="text" id="tag" name="tag" placeholder="Tag de Serviço">

    <br><br><br>

    <h2>Sistema Operacional</h2>
    <br>

        <select id="sistema" name="sistema" required>

            <option disabled selected value="#">Selecione um sistema operacional</option>
            <option value="Windows XP">WINDOWS XP</option>
            <option value="Windows 7">WINDOWS 7</option>
            <option value="windows 8">WINDOWS 8</option>
            <option value="Windows 10 Home">WINDOWS 10 HOME</option>
            <option value="Windows 10 Pro">WINDOWS 10 PRO</option>
            <option value="Windows 11 Home">WINDOWS 11 HOME</option>
            <option value="Windows 11 Pro">WINDOWS 11 PRO</option>

        </select>
    <br><br>
            <input type="text" id="key" nome="chave" placeholder="Chave de Ativação">
    <br><br>

    <h2>Manutenção</h2>
    <br>
            <label for="date">Última Preventiva realizada:</label>
    <br><br>
            <input type="date" id="preventiva" name="preventiva" required>
    <br><br><br>
            <input class="env" type="submit" name="cadastrar" value="cadastrar"
            id="cadastrar">
    

    </form>
    </div>


</body>
</html>