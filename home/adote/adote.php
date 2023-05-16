<?php 
error_reporting(E_ALL ^ E_WARNING);
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogs ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <span>Nome:</span> <?php echo $row['dname']; ?>
            <br>
            <span>Sexo:</span> <?php echo $row['sex']; ?>
            <br>
            <span></span> <?php echo $row['description']; ?>
            <br>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>