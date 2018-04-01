<style type="text/css">
    .navbar-represart{
        flex-direction: row;
        flex-wrap: wrap;
        text-align:center;
    }
    /* Cor da seleção com o mouse em cima background-color*/
    .navbar-represart > ul > li:hover {
        background-color:#aaa9a9;
        border-radius: 50px;
    }   
</style>

<script type="text/javascript">
    function scrollDown(pixels){        
        $('html,body').animate({ scrollTop: pixels }, 'slow');
    }
</script>

<!-- Cor da barra de navegação background-color -->
<div class="navbar navbar-default" style="background-color:#818286;border: none ;border-radius: 25px">
    <div class="navbar-collapse navbar-represart">       
        <ul class="nav navbar-nav">             
            <li><a href="conteudo-represart.php" target="alvo" style="color: white" onClick="scrollDown(355)"> RepresArt</a></li>
            <li><a href="conteudo-historico.php" target="alvo" style="color: white" onClick="scrollDown(355)"> Histórico</a></li>
            <li><a href="conteudo-espetaculo.php" target="alvo" style="color: white" onClick="scrollDown(355)"> Espetáculos</a></li>
            <li><a href="conteudo-oficina.php" target="alvo" style="color: white" onClick="scrollDown(355)"> Oficina</a></li>               
        </ul>           
    </div>
</div>   