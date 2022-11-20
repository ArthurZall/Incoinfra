<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM maquinas WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
           $sqlDelete = "DELETE FROM maquinas WHERE id=$id";
           $resultDeletye = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');

?>