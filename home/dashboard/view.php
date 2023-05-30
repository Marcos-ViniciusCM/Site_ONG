<?php include '../config/checklogin.php'; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
<?php 
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogs ORDER BY id DESC"); 
?>
<head><link rel="stylesheet" href="adote.css"></head>
<h1>Amigos de patas</h1>
<?php if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
        <?php while($row = $result->fetch_assoc()){ ?> 
        <div class="gallery" id="galeria"> 
            <img class="imagem"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <div class="conteudos">
            <div class="dog-nome"><span class="nome"><?php echo $row['dname']; ?>
            <div class="dog-sexo">
            <form action="delete.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar nome:</span><br> 
            <input type ="text" name ="alterarNm">
            <input type ="submit" name ="alterarName"  class="alterar" value="Alterar">
            </form>
            <form action="delete.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar sexo:</span><br> 
            <input type ="text" name ="alterarSx">
            <input type ="submit" name ="alterarSex"  class="alterar" value="Alterar">
            </form>
            <form action="delete.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar descrição:</span><br> 
            <input type ="text" name ="alterarDes">
            <input type ="submit" name ="alterarDesc"  class="alterar" value="Alterar">
            </form>
            <form action="delete.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar imagem 1:</span><br>
            <input type="file" name="imgAdd">
            <input type ="submit" name ="alterarImg1"  class="alterar" value="Upload">
            </form>
                <form action="delete.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar imagem 2:</span><br>
            <input type="file" name="imgAdd">
            <input type ="submit" name ="alterarImg2"  class="alterar" value="Upload">
            <input type ="submit" class="deletar" name ="deleteImg2" value="Deletar">
            </form>
                <form action="delete.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar imagem 3:</span><br>
            <input type="file" name="imgAdd">
            <input type ="submit" name ="alterarImg3"  class="alterar" value="Upload">
            <input type ="submit" class="deletar" name ="deleteImg3" value="Deletar">
            </form>
                <form action="delete.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar imagem 4:</span><br>
            <input type="file" name="imgAdd">
            <input type ="submit" name ="alterarImg4"  class="alterar" value="Upload">
            <input type ="submit" class="deletar" name ="deleteImg4" value="Deletar">
            </form>
            <form action="delete.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <span class="dog-sexo">Alterar status de adoção: </span>
            <span>S</span><input type="radio" name="adoptB" value="adoptY"><span>N</span><input type="radio" name="adoptB" value="adoptN">
            <input type ="submit" class="alterar" name ="adopt" value="Alterar"> 
            </form>
            <form action="delete.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <input type ="submit" class="deletar" name ="delete" value="Deletar">
            </div></div>
            </form></div>
        </div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>