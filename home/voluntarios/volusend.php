<?php
include('../config/config.php'); 
if (isset($_POST['voluntarios'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
            $query = $connection->prepare("INSERT INTO volun(name,telefone,endereco) VALUES (:nome,:telefone,:endereco)");

            $query->bindParam("nome", $nome, PDO::PARAM_STR);

            $query->bindParam("telefone", $telefone, PDO::PARAM_STR);

            $query->bindParam("endereco", $endereco, PDO::PARAM_STR);

            $result = $query->execute();
            
            header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>