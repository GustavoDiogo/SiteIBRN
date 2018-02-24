<?php
include("topo.php");?>
      
           <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-lg-12">
        
        <div class="well well-sm" style="background-color:#818286; margin-bottom:0px;">
        
         <img src="imagens/FULL-BANNERS/capa_70-anos.jpg" class="img-responsive" alt="...">
        
        </div>
        

        </div>
        
        
      </div>  
        
        
        <!-- conteudo devocinais -->
        
        <div class="row">
        
        <div class="col-lg-12">
        
        <div style="background-color:#cfd0d2;">
        
            <div class="row">
            
                <div class="col-lg-3 bloco-menu">
                
                
                
                   <?php
include("menu-70-anos.php");?>

                </div>
                
                 <div class="col-lg-9 bloco-texto-dir">
                 
               <iframe name="alvo" height="330px" width="100%" frameborder="0" scrolling="yes" src="conteudo-70-anos.php" id="theframe"></iframe>
               
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
