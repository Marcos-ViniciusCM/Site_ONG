<?php
    session_start();
    include('../config/config.php');

    if (isset($_POST['login'])) {

        $username = $_POST['username'];

        $password = $_POST['password'];

        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");

        $query->bindParam("username", $username, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (!$result) {

                 echo "<script type='text/javascript'>alert('Erro. Senha ou usuário não reconhecidos.');</script>";
                 echo "<script type='text/javascript'>
                       window.location = '".$_SERVER['HTTP_REFERER']."';
                       </script>";

        } else {

            if (password_verify($password, $result['password'])) {

                $_SESSION['username'] = $result['id'];
                
                header("Location: http://localhost/anjos/home/dashboard/dashboard.php ");

            } else {

                 echo "<script type='text/javascript'>alert('Erro. Senha ou usuário não reconhecidos.');</script>";
                 echo "<script type='text/javascript'>
                       window.location = '".$_SERVER['HTTP_REFERER']."';
                       </script>";
            }

        }

    }

?>


