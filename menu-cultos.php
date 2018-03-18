<style type="text/css">
	.navbar-cultos{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-cultos > ul > li:hover {
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
<div class="navbar navbar-default" style="background-color:#632731;border: none ;border-radius: 25px">
	<div class="navbar-collapse navbar-cultos">		  
		<ul class="nav navbar-nav">
			<li><a href="conteudo-cultos-ao-vivo.php" target="alvo" style="color: white" onClick="scrollDown(265)"> Culto ao vivo</a></li>
			<li><a href="conteudo-cultos-comente.php" target="alvo" style="color: white" onClick="scrollDown(265)"> Comente</a></li>				
		</ul>			
	</div>
</div>        