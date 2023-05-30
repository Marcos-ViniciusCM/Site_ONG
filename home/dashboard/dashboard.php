<?php include '../config/checklogin.php'; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dashboard.css">
</head>
<div class="dashboard">
<input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="input-group">
    <label id="imagem">Selecione ao menos uma imagem:</label>
    <input type="file" name="image">
    <input type="file" name="image2">
    <input type="file" name="image3">
    <input type="file" name="image4">
    </div>
    <div class="input-group">
    <label>Nome do cachorro:</label>
    <input type="text" name="dname">
    <label>Sexo:</label>
    <input type="text" name="sex">
    <label>Descrição:</label>
    <textarea name="description"> </textarea>
    <label>É um cachorro comunitário: <input type="checkbox" name="comunitario"></label>
    <input type="submit" name="submit" value="Upload">
</div>
</form>
<p>Quer alterar a aba de adoção?</p> <a href="/anjos/home/dashboard/view.php" class="register">Clique aqui!</a> 
<p>Quer alterar a aba de cães comunitários?</p> <a href="/anjos/home/dashboard/viewC.php" class="register">Clique aqui!</a> 
<p>Quer ver os voluntários?</p> <a href="/anjos/home/dashboard/volunView.php" class="register">Clique aqui!</a> 
</div>
</html>
