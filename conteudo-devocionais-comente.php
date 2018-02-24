<html>
<head>
<title>Simulador de configuracoes FORMMAIL</title>

<script type="text/javascript">
function checkEmail (strng) {
	var flagError = false;
	var error="";
	
	if (strng == "") {
		error = "O endereço de e-mail deve ser preenchido.";
		flagError = true;
	}
	
	if (!flagError) {
		var illegalChars = /(@.*@)|(@\.)|(@\-)|(@_)(\.@)|(\-@)|(\.\.)|(^\.)|(\.$)|(\.\-)|(\._)|(\-\.)|(_\.)|(^_)|(_$)|(_\-)|(\-\-)|(^\-)|(\-$)|(\-_)/;
		if (strng.match(illegalChars)) {
			error = "O endereço de e-mail contém caracteres inválidos.";
			flagError = true;
		}
	}

	if (!flagError) {
		var emailFilter = /^\S+\@(\[?)[a-zA-Z0-9_\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!(emailFilter.test(strng))) { 
			error = "O endereço de e-mail não está em um formato válido.";
			flagError = true;
		}
	}

	if (!flagError) {
		var emailFilter = /^([a-zA-Z0-9\@_\-\.\+]+)$/;
		if (!(emailFilter.test(strng))) { 
			error = "O endereço de e-mail não está em um formato válido.";
			flagError = true;
		}
	}

	if (flagError) {
		window.alert(error);
	}

	return !flagError;
}
</script>
</head>
<body>
<font face="arial"> Por favor, faça seus comentários, elogios ou críticas. <br>
Retornaremos assim que possível.<br><br></font>
<!-- ATENÇÃO: O PARÂMETRO 'METHOD' NECESSARIAMENTE DEVE TER O VALOR 'post'. -->
<!-- ATENÇÃO: O PARÂMETRO 'ACTION' NECESSARIAMENTE DEVE TER O VALOR 'http://www18.locaweb.com.br/scripts/FormMail.pl'. -->
<form method="post" action="http://www18.locaweb.com.br/scripts/FormMail.pl">
<!-- ATENÇÃO: ESTA TAG 'INPUT' É OBRIGATÓRIA. -->
<!-- ATENÇÃO: O PARÂMETRO 'TYPE' NECESSARIAMENTE DEVE TER O VALOR 'HIDDEN'. -->
<!-- ATENÇÃO: O PARÂMETRO 'NAME' NECESSARIAMENTE DEVE TER O VALOR 'recipient'. -->
 <input type=HIDDEN name="recipient" value="renova.comunica@represanova.com">
<!-- ATENÇÃO: ESTA TAG 'INPUT' É OBRIGATÓRIA. -->
<!-- ATENÇÃO: O PARÂMETRO 'TYPE' NECESSARIAMENTE DEVE TER O VALOR 'HIDDEN'. -->
<!-- ATENÇÃO: O PARÂMETRO 'NAME' NECESSARIAMENTE DEVE TER O VALOR 'redirect'. -->
 <input type=HIDDEN name="redirect" value="http://represanova.com/conteudo-obrigado.php">
<!-- ATENÇÃO: ESTA TAG 'INPUT' É OBRIGATÓRIA. -->
<!-- ATENÇÃO: O PARÂMETRO 'TYPE' NECESSARIAMENTE DEVE TER O VALOR 'HIDDEN'. -->
<!-- ATENÇÃO: O PARÂMETRO 'NAME' NECESSARIAMENTE DEVE TER O VALOR 'subject'. -->
 <input type=HIDDEN name="subject" value="Pagina DEVOCIONAIS">
 <table width="48%" border="0">
 <tr>
 
 <td height="19" width="25%">Nome: </td>
 <td height="19" width="75%"><input type="text" name="nome" size="38"></td>

  </td>
 </tr>
 <tr>
 
  <td height="19" width="25%">E-mail: </td>
  <!-- ATENÇÃO: ESTA TAG 'INPUT' É OBRIGATÓRIA. -->
<!-- ATENÇÃO: O PARÂMETRO 'TYPE' NECESSARIAMENTE DEVE TER O VALOR 'text'. -->
<!-- ATENÇÃO: O PARÂMETRO 'NAME' NECESSARIAMENTE DEVE TER O VALOR 'email'. -->
<!-- ATENÇÃO: O PARÂMETRO 'email' NECESSARIAMENTE DEVE TER O VALOR COM SEU E-MAIL@DOMINIOHOSPEDADO'. -->
  <td height="19" width="75%">
  <input type="text" name="renova.comunica@represanova.com" size="38" id="renova.comunica@represanova.com"></td> 
  </td>
 </tr>
 <tr>

 </tr>
 <tr>
 
  <td height="19" width="25%">Comentarios:</td>
  <td height="184" width="75%"><textarea name="comentarios" cols="40" rows="10"></textarea></td>

  </td>
 </tr>
 <tr>
  <td height="19" width="25%">
  </td>
  <td height="19" width="75%">
<!-- ATENÇÃO: SE QUISER QUE SEU FORMULÁRIO POSSUA VERIFICAÇÃO DE E-MAIL, APAGUE A LINHA ABAIXO E RETIRE O COMENTÁRIO DA LINHA SEGUINTE. -->
  <input type="submit" name="Submit" value="Enviar">
  <!-- <input type="submit" name="Submit" value="Enviar" onclick="javascript: var submit = checkEmail(getElementById('email').value); return submit;" /> -->
  <input type="hidden" name="email" value="renova.comunica@represanova.com">
  <input type="reset" name="Reset" value="Limpar">
  </td>
 </tr>
 </table>
</form>

</body>
</html>