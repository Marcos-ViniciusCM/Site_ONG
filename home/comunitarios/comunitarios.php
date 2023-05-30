<?php 
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogsC ORDER BY id DESC"); 
?>
<head><link rel="stylesheet" href="adote.css"></head>
<h1>Amigos de patas</h1>
<div class="conteudo-anjos">
        <h2>Sobre os cães comunitários</h2>
		<p>O Cão Comunitário é um programa de manejo ético populacional, permitido por lei (Lei Estadual 28.863/2021) , que tem o objetivo de manter animais em situação de rua em uma comunidade sob os cuidados de pessoas dispostas a assumir sua supervisão e garantir melhor qualidade de vida a esses animais, fornecendo alimento, carinho e cuidados veterinários. O cão comunitário, diferentemente de um animal abandonado, recebe cuidados fixos.
			No município de Formiga existem cães comunitários em diversos bairros e o Anjos Gaar acompanha e monitora vários deles, oferecendo suporte sempre que necessário, como alimentos e cuidados veterinários, principalmente àquelas pessoas que não conseguem arcar com todas as despesas.
			</p>
        </div>
<?php if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
        <?php while($row = $result->fetch_assoc()){ ?> 
        <div class="gallery" id="galeria"> 
        <form action="viewDog.php" method="post">
        <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
        
        <input type ="image" class="imagem" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" >
        </form>
        <div class="conteudos">
            <div class="dog-nome"><span class="nome"></span> <?php echo $row['dname']; ?> </div>
            <br>
            <div class="dog-sexo"><span></span> <?php echo $row['sex']; ?></div>
            <br>
            <div class="dog-sobre"><span></span> <?php echo $row['description']; ?></div>
            <br>
            <a href="">Contribua para o cuidado do cão.</a>
        </div>
        </div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>