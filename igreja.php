<?php include("topo.php");?> 
<div align="center" style="background-color:#78373f;border-radius: 25px">  
  <div style="padding-bottom: 1em"></div>         
  <img src="imagens/IGREJA/IMG_TELA_IGREJA.jpg" class="img-responsive" alt="...">
  <div style="padding-bottom: 1em"></div>   
  <?php include("menu-igreja.php");?>      
</div>

<div style="background-color:#f2d0d4;border-radius: 10px">
  <object name="alvo" style="width: 100%;height: 512px" frameborder="0" data="conteudo-igreja.php" id="theframe"></object>               
  <script>
  var _theframe = document.getElementById("theframe");
  _theframe.contentWindow.data = _theframe.src;
  </script>
</div> 
<?php include("rodape.php");?>