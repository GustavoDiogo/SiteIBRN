<?php
include("topo.php");?>
      
      
           <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-lg-12">
        
        <div class="well well-sm" style="background-color:#d2232a; margin-bottom:0px;">
        
         <img src="imagens/ECO/IMG_TELA_ECO.jpg" class="img-responsive" alt="...">
        
        </div>
        

        </div>
        
        
      </div>  
        
        
        <!-- conteudo devocinais -->
        
        <div class="row">
        
        <div class="col-lg-12">
        
        <div style="background-color:#d96160;">
        
            <div class="row">
            
                <div class="col-lg-3 bloco-menu">
                
                
                   <?php
include("menu-eco.php");?>

                </div>
                
                 <div class="col-lg-6 bloco-texto-dir">
                 
               <iframe name="alvo" height="422px" width="100%" frameborder="0" scrolling="yes" src="conteudo-eco-direita.php" id="theframe"></iframe>
               
                <script>
        var _theframe = document.getElementById("theframe");
        _theframe.contentWindow.location.href = _theframe.src;
        </script>
                 
                </div>
                
                <div class="col-lg-3 text-center"  style="margin-top:30px;">
                
               <?php
include("imagem-eco-direita.php");?>
                
                </div>
                
                
                
            
            
            </div>
        
         
        
        </div>
        
        
        
        </div>
        
        
      </div>  
     
      <?php
include("rodape.php");?>