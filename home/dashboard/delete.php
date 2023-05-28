
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

if (isset($_POST['adopt'])){
    $dId = $_POST['id'];
    $final = $_POST['adoptB'];
    if ($final == "adoptY") { 
        $sql = "UPDATE dogs SET adopted = true WHERE id= $dId";
    } else{
        $sql = "UPDATE dogs SET adopted = false WHERE id= $dId";
    }
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('O cachorro foi alterado com sucesso!');</script>";
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
if (isset($_POST['alterarImg1'])){
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif'); 
        $fileName = basename($_FILES["imgAdd"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $image_content = addslashes(file_get_contents($_FILES['imgAdd']['tmp_name'])); 
            $dId = $_POST['id'];
            $sql = "UPDATE dogs SET image='$image_content' WHERE id= $dId";
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
            $sql = "UPDATE dogs SET image2='$image_content' WHERE id= $dId";
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
            $sql = "UPDATE dogs SET image3='$image_content' WHERE id= $dId";
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
            $sql = "UPDATE dogs SET image4='$image_content' WHERE id= $dId";
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
mysqli_close($conn);
?> 