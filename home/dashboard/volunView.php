<?php include '../config/checklogin.php'; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
<?php 
require_once '../config/configView.php'; 
$result = $db->query("SELECT * FROM volun"); 
?>
 <link rel="stylesheet" href="voluntarios.css">
<?php if($result->num_rows > 0){ ?> 
<div>
    <h1>Quadro de Voluntários</h1>
 <?php while($row = $result->fetch_assoc()){ ?> 
    <div class="voluntarios">
    <div class="voluntarios-nome"><span>Nome: </span><?php echo $row['name']; ?></div>
        <br>
     <div class="voluntarios-telefone"><span>Telefone:</span> <?php echo $row['telefone']; ?></div>
        <br>
       <div class="voluntarios-endereço"> <span>Endereço:</span> <?php echo $row['endereco']; ?></div>
        <br>
    <div class="voluntarios-sobre"> <span>Sobre:</span> <?php echo $row['about']; ?></div>
        <br>
        <form action="deleteC.php" method="post">
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
            <input type ="submit" class="deletar" name ="deleteVolun" value="Deletar">
        </form>
        <br></div>
 <?php } ?> 
</div>
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>