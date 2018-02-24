<?php


switch($pagina) {
case"igreja": $ativoigreja = "class='active'"; break;
case"": $ativohome = "class='active'"; break;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Represa Nova</title>

    <!-- Bootstrap -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
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
    
  </head>
  <body>
   <div class="container">


 <div class="row">
        <div class="col-lg-12" align="center" style="padding-bottom:14px">
        <img src="imagens/logo_represanova.png">
        </div>
        
  </div>      

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead" style="padding-bottom:14px;">
        <nav>
          <ul class="nav nav-justified">
            <li <? echo $ativohome ?> ><a href="#"><small>HOME</small></a></li>
            <li <? echo $ativoigreja ?> ><a href="#"><small>A IGREJA</small></a></li>
            <li><a href="#"><small>ESCOLA BÍBLICA</small></a></li>
            <li><a href="#"><small>DEVOCIONAIS</small></a></li>
            <li><a href="#"><small>CULTOS</small></a></li>
            <li><a href="#"><small>MINISTÉRIOS</small></a></li>
             <li><a href="#"><small>CONTATO</small></a></li>
             <li><a href="#"><small>TEATRO REPRESART</small></a></li>
          </ul>
        </nav>
      </div>