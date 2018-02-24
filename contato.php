<?php
$pagina = 'contato'; ?>

<?php
include("topo.php");?>
      
           <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-lg-12">
        
        <div class="well well-sm" style="background-color:#632731; margin-bottom:0px;">
        
         <img src="imagens/CONTATO/IMG_TELA_CONTATO.jpg" class="img-responsive" alt="...">
        
        </div>
        

        </div>
        
        
      </div>  
        
        
        <!-- conteudo devocinais -->
        
        <div class="row">
        
        <div class="col-lg-12">
        
        <div style="background-color:#CCA5A8;">
        
            <div class="row">
            
                <div class="col-lg-3 bloco-menu">
                
                
                
                   <?php
include("menu-contato.php");?>

                </div>
                
                 <div class="col-lg-9 bloco-texto-dir">
                 
               <iframe name="alvo" height="330px" width="100%" frameborder="0" scrolling="yes" src="conteudo-contato-fale.php" id="theframe"></iframe>
               
                <script>
				var _theframe = document.getElementById("theframe");
				_theframe.contentWindow.location.href = _theframe.src;
				</script>
                 
                </div>
                
            
            </div>
        
         
        
        </div>
        
        
        
        </div>
        
        
      </div>  
     
      <?php
include("rodape.php");?>
