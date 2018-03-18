<style type="text/css">
	.navbar-ministerios{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-ministerios > ul > li:hover {
		background-color:#ad9268;
		border-radius: 50px;
	}	
</style>

<script type="text/javascript">
	function scrollDown(pixels){		
		$('html,body').animate({ scrollTop: pixels }, 'slow');
	}
</script>

<!-- Cor da barra de navegação background-color -->
<div class="navbar navbar-default" style="background-color:#9c835b;border: none ;border-radius: 25px">
	<div class="navbar-collapse navbar-ministerios">		  
		<ul class="nav navbar-nav">
			<li><a href="conteudo-ministerios.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Ministérios</a></li>				
			<li><a href="conteudo-ministerios-ajudar.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Como ajudar</a></li>
			<li><a href="conteudo-ministerios-responsaveis.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Responsáveis</a></li>
			<li><a href="conteudo-ministerios-atuamos.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Como atuamos</a></li>
			<li><a href="conteudo-ministerios-diferencial.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Nosso diferencial</a></li>
			<li><a href="conteudo-ministerios-comente.php" target="alvo" style="color: white" onClick="scrollDown(437)"> Comente</a></li>				
		</ul>			
	</div>
</div>