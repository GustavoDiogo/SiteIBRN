<style type="text/css">
	.navbar-contato{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-contato > ul > li:hover {
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
	<div class="navbar-collapse navbar-contato">		  
		<ul class="nav navbar-nav">
			<li><a href="conteudo-contato-fale.php" target="alvo" style="color: white" onClick="scrollDown(320)"> Fale conosco</a></li>				
			<li><a href="conteudo-contato-secretaria.php" target="alvo" style="color: white" onClick="scrollDown(320)"> Secretaria</a></li>
			<li><a href="conteudo-contato-oracao.php" target="alvo" style="color: white" onClick="scrollDown(320)"> Peça oração</a></li>		
		</ul>			
	</div>
</div>