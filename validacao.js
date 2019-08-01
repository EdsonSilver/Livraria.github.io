function enviardados(){

if (document.dados.nomeCompleto.value==""|| document.dados.nomeCompleto.value.length<2) {

	alert("Preencher correctamente o campo nomeCompleto");
	document.dados.nomeCompleto.focus();
	return false;
}

if (document.dados.userName.value=="") {

	alert("Preencher correctamente o campo userName");
	document.dados.userName.focus();
	return false;
}

if (document.dados.senha.value=="") {

	alert("Preencher correctamente o campo senha");
	document.dados.senha.focus();
	return false;
}


if (document.dados.telefone.value==""||document.dados.telefone.value.indexOf('12345678')==-1 ) {

	alert("Preencher correctamente o campo telefone");
	document.dados.telefone.focus();
	return false;
}

if (document.dados.perfil.value=="") {

	alert("Preencher correctamente o campo perfil");
	document.dados.Email.focus();
	return false;
}

if (document.dados.email.value==""|| document.dados.email.value.indexOf('@')==-1|| document.dados.email.value.indexOf('.')==-1) {

	alert("Preencher correctamente o campo email");
	document.dados.email.focus();
	return false;
     }

//<form action="pagina de acao" method="post" name="dados" onsubmit="enviardados();">
//<button type="submit" onclick="enviardados();">Cadastrar</button>
}