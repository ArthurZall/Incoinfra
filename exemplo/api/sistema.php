<?php

    include_once('config.php');
    

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM maquinas WHERE id LIKE '%$data%' or tag LIKE '%$data%' or nome LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
       $sql = "SELECT * FROM maquinas ORDER BY id DESC"; 
    }

    $result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Máquinas</title>
    <style>

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(to right, rgb(74, 113, 197), rgb(11, 31, 145));
        }

        .table-bg {
            background: rgba(0,0,0,0.5);
            border-radius: 15px 15px 0 0;
        }

        .voltar {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-decoration: none;
            color: #fff;
            position: absolute;
            top: 3%;
            left: 70%;
            letter-spacing: 4px;

        }

        .voltar:hover {
            color: grey;
        }

        .barra-sup {
            background: rgb(88, 86, 86);
            padding: 32px;
        }

        .icon {
            position:absolute;
            top: 2%;
        }

        .box-search {
            display:flex;
            justify-content: center;
            position:absolute;
            top: 15%;
            right: 10%;
            transform: translate(-50%, -50%);
            gap: 0.9%;
            
        }



    </style>
</head>
<body>
    
    <div class="barra-sup">
         <nav>
            <img class="icon" src="imagens/cinbalColorida_resized.png" alt="icon">
            <a class="voltar" href="cadastrar.php">Voltar</a>
         </nav>
    </div>
        
    <div class="box-search">

        <input type="search" class="form-control w=25" placeholder="Pesquisar" id="pesquisar">
        
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>

    </div>
    <br><br>

    <div class="m-5">
    <table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo</th>
      <th scope="col">Marca</th>
      <th scope="col">Nome</th>
      <th scope="col">Tag</th>
      <th scope="col">Sistema</th>
      <th scope="col">preventiva</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['tipo']."</td>";
                echo "<td>".$user_data['marca']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['tag']."</td>";
                echo "<td>".$user_data['sistema']."</td>";
                echo "<td>".$user_data['preventiva']."</td>";
                echo "<td>
                    <a class='btn btn-primary btn-sm' href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                    </a>
                    <a class='btn btn-danger btn-sm' href='delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                    </svg>
                </td>";
                echo "</tr>";
            }

        ?>

  </tbody>
</table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
            searchData();
        }
    
    
    });   
    
    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>