
<?php


switch($pagina) {
case"home": $ativohome = "class='active'"; break;
case"igreja": $ativoigreja = "class='active'"; break;
case"ebd": $ativoebd = "class='active'"; break;
case"devocionais": $ativodevocionais = "class='active'"; break;
case"cultos": $ativocultos = "class='active'"; break;
case"ministerios": $ativoministerios = "class='active'"; break;
case"contato": $ativocontato = "class='active'"; break;
case"represart": $ativorepresart = "class='active'"; break;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Represa Nova</title>

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">   

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="http://cluster-piwik.locaweb.com.br/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 10006]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code --> 
    
  </head>
  <body>  
      <nav class="navbar navbar-default navbar-fixed-top" style="border-bottom-right-radius:60px;border-bottom-left-radius:60px;background-color:#ffe2e4">       
        <div class="navbar-header">
          <button style="height:90px;background-color:#efefef" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">            
            <span style="background-color:#ff2d2d" class="icon-bar"></span>
            <span style="background-color:#ff2d2d" class="icon-bar"></span>
            <span style="background-color:#ff2d2d" class="icon-bar"></span>         
          </button>
          <a href="index.php">
              <div style="width:200px">
                  <img style="max-width: 100%; height: 128px; width: 128px;margin-left: 50px" src="imagens/logo_represanova.png"></span>
              </div>
          </a>
        </div>
        <div class="container" style="max-width: 961px">
          <div id="navbar" class="navbar-collapse collapse" style="max-height:100%">        
            <ul class="nav navbar-nav">
              <br><br>
              <li class="active" <? echo $ativohome ?><a style='background-color:#87595b;color:white;border-radius:25px' href="index.php">Home</a></li>

              <li <? echo $ativoigreja ?><a style="color:#87595b" href="igreja.php">A Igreja</a></li>

              <li <? echo $ativoebd ?><a style="color:#87595b" href="ebd.php">Escola Bíblica</a></li>

              <li <? echo $ativodevocionais ?><a style="color:#87595b" href="devocionais.php">Devocionais</a></li>

              <li <? echo $ativocultos ?><a style="color:#87595b" href="cultos.php">Cultos</a></li>

              <li <? echo $ativoministerios ?><a style="color:#87595b" href="ministerios.php">Ministérios</a></li>

              <li <? echo $ativocontato ?><a style="color:#87595b" href="contato.php">Contato</a></li>

              <li <? echo $ativorepresart ?><a style="color:#87595b" href="represart.php">RepresArt</a></li>                     
            </ul>
          </div>
        </div>        
      </nav>
    </body>

    <div style="padding-bottom: 14.5em"></div>  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>