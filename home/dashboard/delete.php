
<?php
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
    $sql = "UPDATE dogs SET dname='$newName' WHERE id= $dId";
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
    $sql = "UPDATE dogs SET sex='$newSex' WHERE id= $dId";
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
    $sql = "UPDATE dogs SET description='$newDesc' WHERE id= $dId";
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
if (isset($_POST['delete'])){
    $dId = $_POST['id'];
    $sql = "DELETE FROM dogs WHERE id = $dId";
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

mysqli_close($conn);
?> 