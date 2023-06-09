<?php 
include ('../config/configView.php');
$result = $db->query("SELECT * FROM dogs ORDER BY id DESC"); 
?>
<head><link rel="stylesheet" href="adote.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class='conteudo-anjos'>
  <h2>adoção responsavel</h2>
 <p>Quando pensamos em adotar um animal, é importante entender o que é posse responsável. Muito além do carinho e da atenção que devem
  ser direcionados ao pet, preservar o bem-estar animal está previsto em lei, e fazer o contrário é considerado crime.
Dessa forma, ao adotar um animal, o tutor assume a responsabilidade pelas condições de vida daquele animal. Isso significa ter deveres
 ligados à saúde e à dignidade daquele ser vivo que passa a estar sob os seus cuidados. Confira abaixo algumas obrigações que traduzem uma posse responsável.</P>
 <ul>
  <li>garantir alimentação adequada com água limpa e fresca à vontade</li>
  <li>oferecer local limpo, protegido contra o frio e o calor</li>
  <li>vacinação adequada e regular</li>
  <li>manter o animal em um espaço que traga conforto, sem estar confinado</li>
  <li>fornecer cuidados médicos veterinários sempre que necessário.</li>
 </ul>
 <p>Você está considerando adotar um animal? 
Conheça nossos cães disponíveis para adoção responsável:</p>

</div>
<?php 
if($result->num_rows > 0){ ?> <!--dentro do while tudo se repetar para todos os cachorros-->
<div class="carrousel" id = "test">
        <?php while($row = $result->fetch_assoc()){ ?> 
        <div class="carrousel-item">
        <div class="gallery" id="galeria">
        <form action="viewDog.php" method="post">
        <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
        <input type ="image" class="imagem" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" >
        </form>
        <div class="conteudos"> 
        <div class="dog-nome"><span class="nome"></span> <?php echo $row['dname']; ?> </div>
        <br>
            <div class="dog-sexo"><span></span><?php echo $row['sex']; ?></div>
            <br>
            <div class="dog-sobre"><span></span> <?php echo nl2br($row['description']); ?></div>
            <br>
            <?php if($row['adopted'] == 1){ ?>
            <span class="adotado">ADOTADO!</span>
            <?php } else{?>
            <a href="https://api.whatsapp.com/send?phone=553798692510&text= Olá! Estou interessado em adotar o/a <?php echo $row['dname']; ?>.." target="_blank">Clique aqui para entrar em contato via WhatsApp</a>
            <?php }?>
        </div> 
        </div>
        </div>
        <?php } ?> 
        </div>
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>







