<?php

    include_once('config.php');

    if(isset($_POST['Update']))
    { 
        $id = $_POST['id'];
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $nome = $_POST['nome'];
        $tag = $_POST['tag'];
        $sistema = $_POST['sistema'];
        $preventiva = $_POST['preventiva'];

        $sqlUpdate = "UPDATE maquinas SET tipo='$tipo',marca='$marca',nome='$nome',tag='$tag',sistema='$sistema',preventiva='$preventiva' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }
    header('location: sistema.php');

?>