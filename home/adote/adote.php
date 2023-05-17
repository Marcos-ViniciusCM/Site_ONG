<?php 
error_reporting(E_ALL ^ E_WARNING);
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogs ORDER BY id DESC"); 
?>
<h1>Aumigos de patas</h1>
<?php if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
    <link rel="stylesheet" href="adote.css">
        <?php while($row = $result->fetch_assoc()){ ?> 
        <div class="gallery" id="galeria"> 
            <img class="imagem"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <span class="nome"><p>Nome:</p></span><p class="nome-cachorro"> <?php echo $row['dname']; ?> </p>
            <br>
            <span><p class="sexo"></p>Sexo:</p></span> <p><?php echo $row['description']; ?></p>
            <br>
            <span>Sobre</span> <?php echo $row['sex']; ?>
            <br>
        </div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>