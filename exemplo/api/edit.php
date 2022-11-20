<?php

    if(!empty($_GET['id']))
    {
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM maquinas WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $tipo = $user_data['tipo'];
                $marca = $user_data['marca'];
                $nome = $user_data['nome'];
                $tag = $user_data['tag'];
                $sistema = $user_data['sistema'];
                $preventiva = $user_data['preventiva'];
            
            }

           
        }
        else
        {
            header('Location: sistema.php');
        }

    
    }
    else
    {
        header('location:sistema.php');
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
    <form action="saveEdit.php" method="POST">
        <h2>Cadastrar Máquina</h2>
    <br><br>
        <select name="tipo" id="tipo" value="<?php echo $tipo ?>" required>

            <option disabled selected value="#">SELECIONE</option>
            <option value="desktop">DESKTOP</option>
            <option value="notebook">NOTEBOOK</option>
            <option value="tv">TV</option>
            <option vvalue="thin-client">THIN CLIENT</option>

        </select>
    <br><br>
    <h2>Descrição</h2>   
    <br>
        <input type="text" id="marca" name="marca" placeholder="Marca" value="<?php echo $marca ?>" required>
    <br><br>
        <input type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
    <br><br>
        <input type="text" id="tag" name="tag" placeholder="Tag de Serviço" value="<?php echo $tag ?>">

    <br><br><br>

    <h2>Sistema Operacional</h2>
    <br>

        <select id="sistema" name="sistema" value="<?php echo $sistema ?>" required>

            <option disabled selected value="#">Selecione um sistema operacional</option>
            <option value="windowsxp">WINDOWS XP</option>
            <option value="windows7">WINDOWS 7</option>
            <option value="windows">WINDOWS 8</option>
            <option value="windows10home">WINDOWS 10 HOME</option>
            <option value="windows10pro">WINDOWS 10 PRO</option>
            <option value="windows11home">WINDOWS 11 HOME</option>
            <option value="windows11pro">WINDOWS 11 PRO</option>

        </select>
    <br><br>
            <input type="text" id="key" nome="chave" placeholder="Chave de Ativação">
    <br><br>

    <h2>Manutenção</h2>
    <br>
            <label for="date">Última Preventiva realizada:</label>
    <br><br>
            <input type="date" id="preventiva" name="preventiva" value="<?php echo $preventiva ?>" required>
    <br><br><br>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input class="env" type="submit" name="Update" value="Update"
            id="Update">
    

    </form>
    </div>


</body>
</html>