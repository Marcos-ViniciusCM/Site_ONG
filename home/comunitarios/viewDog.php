<?php
require_once '../config/configView.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AGusers";
$dId = $_POST['id'];
$result = $db->query("SELECT * FROM dogsC WHERE id=$dId ORDER BY id DESC"); 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
        <?php while($row = $result->fetch_assoc()){ ?>
            <img class="imagem"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
            <img class="imagem" onerror="this.style.display='none'" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image2']); ?>" />
            <img class="imagem" onerror="this.style.display='none'" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image3']); ?>" />
            <img class="imagem" onerror="this.style.display='none'" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image4']); ?>" />
<?php } ?> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>

    
