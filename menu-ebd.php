<style type="text/css">
	.navbar-ebd{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-ebd > ul > li:hover {
		background-color:#f9afa7;
		border-radius: 50px;
	}	
</style>

<script type="text/javascript">
	function scrollDown(pixels){		
		$('html,body').animate({ scrollTop: pixels }, 'slow');
	}
</script>

<!-- Cor da barra de navegação background-color -->
<div class="navbar navbar-default" style="background-color:#f57f73;border: none ;border-radius: 25px">
	<div class="navbar-collapse navbar-ebd">		  
		<ul class="nav navbar-nav">
			<li><a href="conteudo-ebd.php" target="alvo" style="color: white" onClick="scrollDown(400)"> EBD</a></li>				
			<li><a href="conteudo-ebd-salas.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Salas</a></li>
			<li><a href="conteudo-ebd-junte-se.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Junte-se</a></li>
			<li><a href="conteudo-ebd-descobrir.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Descobrir</a></li>
			<li><a href="conteudo-ebd-alimentar.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Alimentar-se</a></li>
			<li><a href="conteudo-ebd-comente.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Comente</a></li>				
		</ul>			
	</div>
</div>