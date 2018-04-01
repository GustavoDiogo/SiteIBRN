<style type="text/css">
	.navbar-devocionais{
		flex-direction: row;
		flex-wrap: wrap;
		text-align:center;
	}
	/* Cor da seleção com o mouse em cima background-color*/
	.navbar-devocionais > ul > li:hover {
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
	<div class="navbar-collapse navbar-devocionais">		  
		<ul class="nav navbar-nav">			
			<li><a href="devocional-atual.php" target="alvo" style="color: white" onClick="scrollDown(345)"> Devocional Atual</a></li>				
			<li><a href="conteudo-devocionais-anteriores.php" target="alvo" style="color: white" onClick="scrollDown(345)"> Anteriores</a></li>
			<li><a href="conteudo-devocionais-whatsapp.php" target="alvo" style="color: white" onClick="scrollDown(345)"> WhatsApp</a></li>
			<li><a href="conteudo-devocionais-comente.php" target="alvo" style="color: white" onClick="scrollDown(345)"> Comente</a></li>				
		</ul>			
	</div>
</div>