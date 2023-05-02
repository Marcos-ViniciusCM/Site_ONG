<?php include '../config/checklogin.php'; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
</head>
<input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Selecione uma imagem:</label>
    <input type="file" name="image">
    <label>Nome do cachorro:</label>
    <input type="text" name="dname">
    <input type="submit" name="submit" value="Upload">
</form>
<p>Quer ver seus uploads?</p> <a href="/home/dashboard/view.php" class="register">Clique aqui!</a>   
<p>Quer ver os voluntários?</p> <a href="/home/dashboard/volunView.php" class="register">Clique aqui!</a> 
</html>
