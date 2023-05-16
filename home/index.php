
<?php ob_start(); ?>
<?php 
error_reporting(E_ALL ^ E_WARNING);
require_once '../home/config/configView.php';
$result = $db->query("SELECT * FROM dogs"); 
?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anjos Gaar</title>
    <link rel="stylesheet" href="style.css">
    <script src="carrosel.js" defer></script>
</head>


<body>
    
    <header>
   <div class="navBar">
    <img src="imagem/imagem-header-semFundo.png" >
   <a class = "logo "href="" >Anjos Gaar </a>
                                                            <!----nav bar para mobile -->
<div class="mobile-menu">
   <div class="line1"></div>
   <div class="line2"></div>
   <div class="line3"></div>
</div>
                                                            <!--nav bar desktop-->
   <ul class="nav-list">
       <li><a href="https://www.instagram.com/anjosgaar/"><div class="instagram"><img src="imagem/instagram.png"></div></a></li>
        <li><a href="adote/adote.php" >Adote</a></li>
        <li><a href="voluntarios/voluntarios.html" >Voluntarios</a></li>
        <li><a href="" >Cães comunitarios</a></li>
        <li><a href="register/register.html" >Registro</a></li>
    </ul>
    <a class="button-donation" href="doa%C3%A7%C3%A3o/doa%C3%A7%C3%A3o.html" >Doe</a></li>
   </div> 
</header>
<main><script src="mobile-menu.js"></script></main>

    <div id="doacao-home">
      <div class="conteudo">
        <h2>COM A SUA CONTRIBUIÇÃO, ESTAMOS JUNTOS NA MISSÃO</h2><br>
        <h2 class="second-line">DE MELHORAR A VIDA DE MILHARES DE ANIMAIS.</h2>
        <a class="link" href="#">QUERO AJUDAR </a>
      </div>
    </div>

    <div id="sobre">
        <h1>Saiba como a Anjos Gaar cuida e acolhe de forma única.</h1>
        <div class="box">
            <img src="imagem/3.png">
            <h1>DOAÇÕES</h1>
            <p>Faça um cãozinho feliz hoje. Contribua para a felicidade de um amigo de quatro patas necessitado.</p>
            <a src="">Saiba Mais</a>
        </div>
        <div class="box">
          <img src="imagem/cuidado animal.png">
          <h1>ADOTE</h1>
          <p>Transforme a vida de um cãozinho hoje. Adote, Doe, Ame.</p>
            <a src="">Saiba Mais</a>
        </div>
        <div class="box">
          <img src="imagem/mao cachorro.png">
          <h1>CÃES COMUNITARIOS</h1>
          <p>Cães Comunitários são cães de rua que não possuem donos, e são acolhidos e cuidados pela comunidade.</p>
    </div>
    
    <div class="voluntarios">
        <img src="https://img.freepik.com/fotos-gratis/vista-lateral-do-cao-de-resgate-amando-o-carinho-que-recebe-da-mulher-no-abrigo_23-2148682930.jpg?size=626&ext=jpg" alt="Imagem">
        <div class="topicos">
          <div class="topico">
            <h1>VOLUNTARIOS GAAR</h1>
            <p>Junte-se à nossa comunidade de voluntários e faça a diferença ajudando a construir<br> um mundo melhor juntos!</p>
          </div>
          <div class="topico">
            <p>Contribuindo como voluntário, você estará ajudando a construir um mundo melhor</p>
            <a href="#">QUERO AJUDAR </a>
          </div>
        </div>
      </div>
<?php if($result->num_rows > 0){ ?> 
       <div class="slider-container">
        <div class="slider">
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
      </div>
<?php }else{ ?> 
    <p class="status error">Imagens não encontradas...</p> 
<?php } ?>
    <div class="apadrinhar">
      <div class="topico-apadrinhar">
      <h1>APESAR DE NÃO TER CONDIÇÕES DE ADOTAR, QUERO AJUDAR!</h1>
      <img src="imagem/doacao (1).png">
      <p>Ao apadrinhar um cachorro, você estará contribuindo com abrigo, alimentação, cuidados veterinários e amor para um animalzinho que está aguardando por uma família definitiva. Você pode se tornar um herói 
        para esse cãozinho, oferecendo-lhe a chance de viver uma vida feliz e saudável enquanto ele aguarda por sua adoção.</p>
     <a href="">Doe</a>
      </div>
    </div>  

</body>
</html>