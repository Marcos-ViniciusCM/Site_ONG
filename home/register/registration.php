<?php

    session_start();

    include('config.php');

    if (isset($_POST['register'])) {

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");

        $query->bindParam("email", $email, PDO::PARAM_STR);

        $query->execute();

        if ($query->rowCount() > 0) {

            echo "<script type='text/javascript'>alert('Erro. Esse email já foi registrado.');</script>";
            echo "<script type='text/javascript'>
                window.location = '".$_SERVER['HTTP_REFERER']."';
                </script>";

        }

        if ($query->rowCount() == 0) {

            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");

            $query->bindParam("username", $username, PDO::PARAM_STR);

            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);

            $query->bindParam("email", $email, PDO::PARAM_STR);

            $result = $query->execute();

            if ($result) {

                 echo "<script type='text/javascript'>alert('Sucesso! Seu registro foi efetuado.');</script>";
                 echo "<script type='text/javascript'>
                       window.location = '".$_SERVER['HTTP_REFERER']."';
                       </script>";

            } else {

                 echo "<script type='text/javascript'>alert('Erro. Algo deu errado :(');</script>";
                 echo "<script type='text/javascript'>
                       window.location = '".$_SERVER['HTTP_REFERER']."';
                       </script>";

            }

        }

    }

?>
