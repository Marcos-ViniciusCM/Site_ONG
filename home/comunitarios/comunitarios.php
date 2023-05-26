<?php 
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogsC ORDER BY id DESC"); 
?>
<head><link rel="stylesheet" href="adote.css"></head>
<h1>Amigos de patas</h1>
<?php if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
        <?php while($row = $result->fetch_assoc()){ ?> 
        <div class="gallery" id="galeria"> 
            <img class="imagem"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <div class="conteudo">
            <div class="dog-nome"><span class="nome"></span> <?php echo $row['dname']; ?> </div>
            <br>
            <div class="dog-sexo"><span></span> <?php echo $row['sex']; ?></div>
            <br>
            <div class="dog-sobre"><span></span> <?php echo $row['description']; ?></div>
            <br></div>
        </div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>