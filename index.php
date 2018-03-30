<?php
include("topo.php");?>

<style type="text/css">


  .vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
  }
  
  .foto-bloco{
    padding-bottom:7px;
    padding-top:5px;

  }
  
  .col-center{
    margin:0 auto;
  } 

  @media (min-width: 1200px) {

    .blocos{
      margin-left:15px;
    }
    
    .blocos2{
      margin-left:15px;
      margin-top:30px;
    }
    
  }
  
  .display-table{
    display: table;
    table-layout: fixed;
  }

  .display-cell{
    display: table-cell;
    vertical-align: middle;
    float: none;
  }
  .list-unstyled li{
    margin-bottom:5px;
  }
  
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <div class="carousel-inner" style="max-width: 100%;max-height: 768px" align="center">
    <div class="item active">
      <img src="imagens/pascoa2018.jpg" style="height: 512px">
    </div>

    <div class="item">
      <img src="imagens/cultodoamigo2018.jpg" style="height: 512px">
    </div>

    <div class="item">
      <a href="represart.php"><img src="imagens/BANNERS/banner_teatro.jpg" style="height: 512px"></a>
    </div>

    <div class="item">
      <a href="eco.php"><img src="imagens/BANNERS/banner_eco.jpg" style="height: 512px"></a>
    </div>

    <div class="item">
      <a href="missoes.php"><img src="imagens/BANNERS/banner_missoes.jpg" style="height: 512px"></a>
    </div>

    <div class="item">
      <a href="ebd.php"><img src="imagens/BANNERS/banner_ebd.jpg" style="height: 512px"></a>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="border-radius: 10px">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="border-radius: 10px">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div style="padding-bottom: 2em"></div>

<div style="background-color:#632731; color:#FFF; max-width: 100%">
  <div style="padding: 1em 1em 1em 1em">
    <img src="imagens/icone_devocional.png"> Devocional da Semana
  </div>
  <!-- Título -->
  <div align="center"><h3>O caminho da salvação passa pela morte de Cristo <b>(Lucas 2. 34, 35)</b></h3></div>
  <!-- Resumo -->
  <div style="padding: 1em 1em 1em 1em" style="justify-content: flex-start;text-align: justify;text-justify: inter-word">
   Que pai não gosta de receber elogio acerca de seu filho? Simeão fala algo de gelar o coração da uma mãe. Ele diz, Maria, para que essa salvação seja obtida, o seu bebê vai ter que morrer.<br>
   O verso 34 diz que vai haver uma contradição....
   <a href="devocionais.php">CONTINUA</a>
   <a href="devocionais/2016/audios/20161225.mp3" target="_blank"><img src="imagens/icone_player.png"></a>
  </div>
</div>

<!-- bloco 1 a 4 -->
<div class="row blocos" style="margin-top:30px;"  >

 <div class="col-lg-3">

  <!-- titulo 1 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1 hidden-xs" style="background-color: #818286; margin-right:5px; height:20px;">
    </div>

    <div style="color:#bdbec0">
     <strong>TEATRO REPRESART</strong>
   </div>

 </div>

 <!-- fim titulo 1 -->

 <!-- foto descricao 1 --> 
 <div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color: #818286; margin-right:5px; height:270px;"></div>


  <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color:#bdbec0; margin:0px;">

   <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="represart.php"><img src="imagens/img_teatro_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row ">
     <div class="col-lg-12 ">
       <p><small>A equipe de teatro Represart representa por meio artístico a graça de Deus</small><br><br></p>
     </div>
   </div>


 </div>

</div> 
<!-- fim foto descricao 1 -->


</div>

<div class="col-lg-3">

 <!-- titulo 2 --> 

 <div class="row" style="padding-bottom:3px">

  <div class="col-lg-1 hidden-xs" style="background-color:#008081; margin-right:5px; height:20px;">
  </div>

  <div style="color:#008081" >
   <strong>JOVENS</strong>
 </div>

</div>

<!-- fim titulo 2 -->

<!-- foto descricao 2 --> 
<div class="row">

  <div class="col-lg-1 hidden-xs" style="background-color:#008081; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9  col-xs-18" style="background-color:#40a09f; margin:0px;">

   <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="jovens.php"><img src="imagens/img_jovens_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12">
       <p><small>Esses jovens entenderam, aceitaram e agora trabalham para que a sua geração conheça<br>
         Jesus</small><br></p>
       </div>
     </div>


   </div>

 </div> 
 <!-- fim foto descricao 2 -->


</div>

<div class="col-lg-3">

  <!-- titulo 3 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1  hidden-xs" style="background-color: #f6eb29; margin-right:5px; height:20px;">
    </div>

    <div style="color: #f6eb29" >
     <strong>REPRESA KIDS</strong>
   </div>

 </div>

 <!-- fim titulo 3 -->


 <!-- foto descricao 3 --> 
 <div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color: #f6eb29; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color: #fef568; margin:0px;">


   <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="kids.php"><img src="imagens/img_kids_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12 ">
       <p><small>O crescimento espiritual dessas ovelhinhas é nossa responsabilidade e missão</small><br><br></p>
     </div>
   </div>


 </div>

</div> 
<!-- fim foto descricao 3 -->


</div>

<div class="col-lg-3">

  <!-- titulo 4 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1  hidden-xs" style="background-color:#d2232a; margin-right:5px; height:20px;">
    </div>

    <div style="color:#d2232a" >
     <strong>GRUPO ECO</strong>
   </div>

 </div>

 <!-- fim titulo 4 -->


 <!-- foto descricao 4 --> 
 <div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color:#d2232a; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color:#db634b; margin:0px;">


    <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="eco.php"><img src="imagens/img_eco_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12 ">
       <p><small>Pequenos grupos nos lares, onde todos participam e todos aprendem</small><br><br></p>
     </div>
   </div>

 </div>

</div> 
<!-- fim foto descricao 4 -->



</div>
</div>


<!-- bloco de 4 a 8 -->

<div class="row blocos2">



 <div class="col-lg-3">

  <!-- titulo 5 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1  hidden-xs" style="background-color: #eea03e; margin-right:5px; height:20px;">
    </div>

    <div style="color:#eea03e" >
     <strong>AÇÃO SOCIAL</strong>
   </div>

 </div>

 <!-- fim titulo 5 -->

 <!-- foto descricao 5 --> 
 <div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color:  #eea03e; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9 col-xs-18" style="background-color:#f1b366; margin:0px;">

    <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="acao_social.php"><img src="imagens/img_social_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12 ">
       <p><small>Cuidar com amor, observando as necessidades humanas e espirituais<br><br></small></p>
     </div>
   </div>

 </div>

</div> 
<!-- fim foto descricao 5 -->


</div>

<div class="col-lg-3">

 <!-- titulo 6 --> 

 <div class="row" style="padding-bottom:3px">

  <div class="col-lg-1  hidden-xs" style="background-color:#384a7c; margin-right:5px; height:20px;">
  </div>

  <div style="color:#384a7c" >
   <strong>HOMENS</strong>
 </div>

</div>

<!-- fim titulo 6 -->

<!-- foto descricao 6 --> 
<div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color:#384a7c; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color: #69779c; margin:0px;">

    <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="homens.php"><img src="imagens/img_homens_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12 ">
       <p><small>Homens unidos e com visão ministerial<br><br><br></small></p>
     </div>
   </div>

 </div>

</div> 
<!-- fim foto descricao 6 -->


</div>

<div class="col-lg-3">

  <!-- titulo 7 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1  hidden-xs" style="background-color:#9400d4; margin-right:5px; height:20px;">
    </div>

    <div style="color: #9400d4">
      <strong>MULHERES</strong>
    </div>

  </div>

  <!-- fim titulo 7 -->


  <!-- foto descricao 7 --> 
  <div class="row">

    <div class="col-lg-1  hidden-xs" style="background-color:#9400d4; margin-right:5px; height:270px;">
    </div>

    <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color: #b54de0; margin:0px;">

     <div class="row">
       <div class="col-lg-12 foto-bloco text-center ">
         <a href="mulheres.php"><img src="imagens/img_mulheres_bloco.jpg" class="img-thumbnail"></a>
       </div>
     </div>

     <div class="row ">
       <div class="col-lg-12 ">
         <p><small>Preciosas, sábias e importantes na harmonia familiar e no evangelismo<br><br></small></p>
       </div>
     </div>

   </div>

 </div> 
 <!-- fim foto descricao 7 -->


</div>

<div class="col-lg-3">

  <!-- titulo 8 --> 

  <div class="row" style="padding-bottom:3px">

    <div class="col-lg-1  hidden-xs" style="background-color:#3f6631; margin-right:5px; height:20px;">
    </div>

    <div style="color:#3f6631" >
     <strong>MISSÕES</strong>
   </div>

 </div>

 <!-- fim titulo 8 -->


 <!-- foto descricao 8 --> 
 <div class="row">

  <div class="col-lg-1  hidden-xs" style="background-color:#3f6631; margin-right:5px; height:270px;">
  </div>

  <div class="col-lg-offset-2 col-lg-9 col-xs-18 " style="background-color: #b1b872; margin:0px;">

   <div class="row">
     <div class="col-lg-12 foto-bloco text-center ">
       <a href="missoes.php"><img src="imagens/img_missoes_bloco.jpg" class="img-thumbnail"></a>
     </div>
   </div>

   <div class="row  ">
     <div class="col-lg-12 ">
       <p><small>Empenho e participação de Represa Nova no evangelismo mundial<br><br></small></p>
     </div>
   </div>

 </div>

</div> 
<!-- fim foto descricao 8 -->


</div>
</div>

<?php
include("rodape.php");?>     