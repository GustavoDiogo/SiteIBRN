<?php
$pagina = 'ministerios'; ?>

<?php
include("topo.php");?>
      
      
           <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-lg-12">
        
        <div class="well well-sm" style="background-color:#9c835b; margin-bottom:0px;">
        
         <img src="imagens/MINISTERIOS/IMG_TELA_MINISTERIOS.jpg" class="img-responsive" alt="...">
        
        </div>
        

        </div>
        
        
      </div>  
        
        
        <!-- conteudo devocinais -->
        
        <div class="row">
        
        <div class="col-lg-12">
        
        <div style="background-color:#d9c5a2;">
        
            <div class="row">
            
                <div class="col-lg-3 bloco-menu">
                
                
                   <?php
include("menu-ministerios.php");?>

                </div>
                
                 <div class="col-lg-6 bloco-texto-dir">
                 
               <iframe name="alvo" height="422px" width="100%" frameborder="0" scrolling="yes" src="conteudo-ministerios-direita.php" id="theframe"></iframe>
               
                <script>
				var _theframe = document.getElementById("theframe");
				_theframe.contentWindow.location.href = _theframe.src;
				</script>
                 
                </div>
                
                <div class="col-lg-3 text-center"  style="margin-top:30px;">
                
               <?php
include("imagem-ministerios-direita.php");?>
                
                </div>
                
                
                
            
            
            </div>
        
         
        
        </div>
        
        
        
        </div>
        
        
      </div>  
     
      <?php
include("rodape.php");?>