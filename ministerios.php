<?php include("topo.php");?> 
<!-- Cor do fundo da imagem da página background-color -->
<div align="center" style="background-color:#9c835b;border-radius: 15px">  
  <div style="padding-bottom: 1em"></div>
  <!-- Para alterar a imagem da página, basta mudar o caminho do src para outra imagem  -->
  <img src="imagens/MINISTERIOS/IMG_TELA_MINISTERIOS.jpg" class="img-responsive" alt="...">
  <div style="padding-bottom: 1em"></div>   
  <?php include("menu-ministerios.php");?>      
</div>

<!-- Cor do fundo do texto após imagem e barra de navegação -->
<div style="background-color:#d9c5a2;border-radius: 10px">
  <iframe name="alvo" style="width: 100%;height: 512px" frameborder="0" scrolling="yes" src="conteudo-ministerios.php" id="theframe"></iframe>
</div>

<script>
  var _theframe = document.getElementById("theframe");
  _theframe.contentWindow.location.href = _theframe.src;
</script> 

<?php include("rodape.php");?>