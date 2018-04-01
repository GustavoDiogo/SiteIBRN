<style type="text/css">
	.navbar-igreja{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-igreja > ul > li:hover {
		background-color:#87595b;
		border-radius: 50px;
	}	
</style>

<script type="text/javascript">
	function scrollDown(pixels){		
		$('html,body').animate({ scrollTop: pixels }, 'slow');
	}
</script>

<!-- Cor da barra de navegação background-color -->
<div class="navbar navbar-default" style="background-color:#78373f;border: none ;border-radius: 25px">
	<div class="navbar-collapse navbar-igreja">		  
		<ul class="nav navbar-nav">				
			<li><a href="conteudo-igreja.php" target="alvo" style="color: white" onClick="scrollDown(400)"> A Igreja</a></li>
			<li><a href="conteudo-igreja-pastor.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Pastor</a></li>
			<li><a href="conteudo-igreja-escrituras.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Exame das Escrituras</a></li>
			<li><a href="conteudo-igreja-compromisso-social.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Compromisso Social</a></li>
			<li><a href="conteudo-igreja-comente.php" target="alvo" style="color: white" onClick="scrollDown(400)"> Comente</a></li>				
		</ul>			
	</div>
</div>	