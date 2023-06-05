
<?php ob_start(); ?>
<?php 
require_once '../home/config/configView.php';
$result = $db->query("SELECT * FROM dogs"); 
?>
<html lang="pt-br" xml:lang="pt-br">
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
       <li><a href="https://instagram.com/anjosgaar?igshid=MzRlODBiNWFlZA=="><div class="instagram"><img src="imagem/instagram.png"> Instagram Gaar</div></a></li>
        <li><a href="adote/adote.php" >Adote</a></li>
        <li><a href="voluntarios/voluntarios.html" >Voluntarios</a></li>
        <li><a href="comunitarios/comunitarios.php" >Cães comunitarios</a></li>
    </ul>
    <a class="button-donation" href="doa%C3%A7%C3%A3o/doa%C3%A7%C3%A3o.html">Doe</a></li>
   </div> 
</header>
<main><script src="mobile-menu.js"></script></main>
    <div id="doacao-home"> 
      <div class="conteudo">
      </div>
    </div>

    <div id="sobre">
        <h1>Saiba como a Anjos Gaar cuida e acolhe de forma única.</h1>
        <div class="box">
            <img src="imagem/3.png">
            <h1>DOAÇÕES</h1>
            <p>Faça um cãozinho feliz hoje. Contribua para a felicidade de um amigo de quatro patas necessitado.</p>
            <a href="doa%C3%A7%C3%A3o/doa%C3%A7%C3%A3o.html">Saiba Mais</a>
        </div>
        <div class="box">
          <img src="imagem/cuidado animal.png">
          <h1>ADOTE</h1>
          <p>Transforme a vida de um cãozinho hoje. Adote, Doe, Ame.</p>
            <a href="adote/adote.php">Saiba Mais</a>
        </div>
        <div class="box">
          <img src="imagem/mao cachorro.png">
          <h1>CÃES COMUNITARIOS</h1>
          <p>Cães Comunitários são cães de rua que não possuem donos, e são acolhidos e cuidados pela comunidade.</p>
          <a href="comunitarios/comunitarios.php">Saiba Mais</a>
    </div>
    
    <div class="voluntarios">
        <img src="imagem/434f4502-6f8a-47b3-b06f-321bd547ae7d.JPG" alt="Imagem">
        <div class="topicos">
          <div class="topico">
            <h1>VOLUNTARIOS GAAR</h1>
            <h3>Existem várias maneiras de colaborar com o grupo Anjos GAAR nas ações voltadas à causa animal ou mesmo de ser um voluntário independente, fazendo o que está ao seu alcance. Algumas formas de trabalho voluntário são:</h3>
           <ul>
            <li>Auxílio em feiras de adoção, permanecendo no local para supervisionar os animais ou vendendo algum produto.</li>
            <li>Supervisão a cães comunitários, passando pelos locais que podem ser próximos à sua casa ou trabalho, reconhecendo os animais e verificando suas necessidades.</li>
            <li>Caso você possa oferecer lar temporário de poucos dias para o período pós-operatório de castração, é algo que ajuda imensamente;</li>
            <li>Uma carona de ida e volta no médico veterinário, ou no dia da castração também ajudam muito.</li>
            <li>Divulgação de campanhas de arrecadação de recursos financeiros que cobrem as despesas de resgate e tratamento animal.</li>
            <li>Doação de materiais de uso animal, como: ração, caminhas, casinhas, cobertores, comedouros, medicamentos, coleiras, etc.</li>
            <li>Doação em dinheiro para pagamento das despesas em clínicas veterinárias</li>
            <li>O principal e mais fácil: colocar em sua porta uma vasilha de água fresca e, se possível, alimento que não estrague, como ração seca, e que rapidamente seja consumido pelo animal que passa pela rua.</li>
            <li>Você também pode ajudar conscientizando um amigo, um vizinho, um familiar sobre a situação de sofrimento e risco que os animais em situação de rua vivem, e sobre maus-tratos tão frequentes que acontecem dentro das casas.</li>

           </ul>
          </div>
          <div class="topico">
            <p>Contribuindo como voluntário, você estará ajudando a construir um mundo melhor</p>
            <a href="voluntarios/voluntarios.html">QUERO AJUDAR </a>
          </div>
        </div>
      </div>
      
      <!--carrosel-->
      <?php if($result->num_rows > 0) ?> 
      <h1>Cães de adoção</h1>
<div class="container">
  <button class="arrow-left control" aria-label="Previous image">◀</button>
  <button class="arrow-right control" aria-label="Next Image">▶</button>
  <div class="gallery-wrapper">
    <div class="gallery">
    <?php while($row = $result->fetch_assoc()){ ?> 
            <img class="item current-item" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div>
  </div>
</div>
<?php if($result->num_rows > 0){ ?> 
<?php }else{ ?> 
<?php } ?>


<!-- final carrosel-->
    <div class="apadrinhar">
      <div class="topico-apadrinhar">
      <h1>APESAR DE NÃO TER CONDIÇÕES DE ADOTAR, QUERO AJUDAR!</h1>
      <img src="imagem/doacao (1).png">
      <p>Ao doar, você estará contribuindo com abrigo, alimentação, cuidados veterinários e amor para um animalzinho que está aguardando por uma família definitiva. Você pode se tornar um herói 
        para esse cãozinho, oferecendo-lhe a chance de viver uma vida feliz e saudável enquanto ele aguarda por sua adoção.</p>
      <a href="doação/doação.html">Doe</a>
      </div>
    </div>  
</body>
</html>