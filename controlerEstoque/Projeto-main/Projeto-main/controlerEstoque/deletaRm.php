<?php
    include_once "conexao.php";
    if (isset($_GET['id'])){
        $sql = "DELETE FROM requisicao WHERE id = " . $_GET['id'];
        mysqli_query($conn, $sql);
        echo "<script>window.confirm('Requisição deletada com sucesso');</script>";  
        echo "<script>window.location.replace('excluirRm.php');</script>";

    }

?>