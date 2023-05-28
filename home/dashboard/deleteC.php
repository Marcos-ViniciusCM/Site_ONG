<?php
require_once '../config/configView.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AGusers";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['alterarName'])){
    $newName = $_POST['alterarNm'];
    $dId = $_POST['id'];
    $sql = "UPDATE dogsC SET dname='$newName' WHERE id= $dId";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('O nome do cachorro foi alterado com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; 
    }
}
if (isset($_POST['alterarSex'])){
    $newSex = $_POST['alterarSx'];
    $dId = $_POST['id'];
    $sql = "UPDATE dogsC SET sex='$newSex' WHERE id= $dId";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('O sexo do cachorro foi alterado com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; 
    }
}
if (isset($_POST['alterarDesc'])){
    $newDesc = $_POST['alterarDes'];
    $dId = $_POST['id'];
    $sql = "UPDATE dogsC SET description='$newDesc' WHERE id= $dId";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('A descrição do cachorro foi alterado com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; 
    }
}
if (isset($_POST['alterarImg1'])){
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif'); 
        $fileName = basename($_FILES["imgAdd"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $image_content = addslashes(file_get_contents($_FILES['imgAdd']['tmp_name'])); 
            $dId = $_POST['id'];
            $sql = "UPDATE dogsC SET image='$image_content' WHERE id= $dId";
        if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Nova imagem adicionada com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
        } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; }
       }    else{
            echo "<script type='text/javascript'>alert('Tipo de imagem não suportado!');</script>";
            echo "<script type='text/javascript'>
            window.location = '".$_SERVER['HTTP_REFERER']."';
            </script>";
        }
}
if (isset($_POST['alterarImg2'])){
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif'); 
        $fileName = basename($_FILES["imgAdd"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $image_content = addslashes(file_get_contents($_FILES['imgAdd']['tmp_name'])); 
            $dId = $_POST['id'];
            $sql = "UPDATE dogsC SET image2='$image_content' WHERE id= $dId";
        if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Nova imagem adicionada com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
        } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; }
       }    else{
            echo "<script type='text/javascript'>alert('Tipo de imagem não suportado!');</script>";
            echo "<script type='text/javascript'>
            window.location = '".$_SERVER['HTTP_REFERER']."';
            </script>";
        }
}
if (isset($_POST['alterarImg3'])){
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif'); 
        $fileName = basename($_FILES["imgAdd"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $image_content = addslashes(file_get_contents($_FILES['imgAdd']['tmp_name'])); 
            $dId = $_POST['id'];
            $sql = "UPDATE dogsC SET image3='$image_content' WHERE id= $dId";
        if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Nova imagem adicionada com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
        } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; }
       }    else{
            echo "<script type='text/javascript'>alert('Tipo de imagem não suportado!');</script>";
            echo "<script type='text/javascript'>
            window.location = '".$_SERVER['HTTP_REFERER']."';
            </script>";
        }
}
if (isset($_POST['alterarImg4'])){
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif'); 
        $fileName = basename($_FILES["imgAdd"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $image_content = addslashes(file_get_contents($_FILES['imgAdd']['tmp_name'])); 
            $dId = $_POST['id'];
            $sql = "UPDATE dogsC SET image4='$image_content' WHERE id= $dId";
        if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Nova imagem adicionada com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
        } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; }
       }    else{
            echo "<script type='text/javascript'>alert('Tipo de imagem não suportado!');</script>";
            echo "<script type='text/javascript'>
            window.location = '".$_SERVER['HTTP_REFERER']."';
            </script>";
        }
}
if (isset($_POST['delete'])){
    $dId = $_POST['id'];
    $sql = "DELETE FROM dogsC WHERE id = $dId";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('O cachorro foi deletado com sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert('Erro alterando o cachorro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; 
    }
}

if (isset($_POST['deleteVolun'])){
    $dId = $_POST['id'];
    $sql = "DELETE FROM volun WHERE id = $dId";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Sucesso!');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert('Erro...');</script>";
        echo "<script type='text/javascript'>
        window.location = '".$_SERVER['HTTP_REFERER']."';</script>"; 
    }
}

mysqli_close($conn);
?> 