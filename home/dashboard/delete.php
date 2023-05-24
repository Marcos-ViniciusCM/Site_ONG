
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AGusers";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['alterarDesc'])){
    $newDesc = $_POST['alterarDes'];
    $dId = $_POST['id'];
    $sql = "UPDATE dogs SET description='$newDesc' WHERE id= $dId";
    if (mysqli_query($conn, $sql)) {
        echo "Descrição alterada com sucesso.";
    } else {
        echo "Erro alterando o cachorro: " . mysqli_error($conn);
    }
}
if (isset($_POST['delete'])){
    $dId = $_POST['id'];
    $sql = "DELETE FROM dogs WHERE id = $dId";
    if (mysqli_query($conn, $sql)) {
        echo "Cachorro deletado com sucesso.";
    } else {
        echo "Erro deletando o cachorro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?> 