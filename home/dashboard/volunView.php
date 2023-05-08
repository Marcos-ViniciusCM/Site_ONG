<?php include '../config/checklogin.php'; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
<?php 
require_once '../config/configView.php'; 
 
$result = $db->query("SELECT * FROM volun"); 
?>
<?php if($result->num_rows > 0){ ?> 
<div>
 <?php while($row = $result->fetch_assoc()){ ?> 
        <span>Nome:</span> <?php echo $row['name']; ?>
        <br>
        <span>Telefone:</span> <?php echo $row['telefone']; ?>
        <br>
        <span>Endereço:</span> <?php echo $row['endereco']; ?>
        <br>
        <br>
 <?php } ?> 
</div>
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>