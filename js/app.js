function enviardados(){

if (document.dados.nome.value=="") {

	alert("Preencher o campo nome");
	document.dados.nome.focus();
	return false;
    }

    if (document.dados.endereco.value=="") {

	alert("Preencher o campo endereco");
	document.dados.endereco.focus();
	return false;
    }

        if (document.dados.endereco.value=="") {

	alert("Preencher o campo telefone");
	document.dados.telefone.focus();
	return false;
    }


if (document.dados.email.value==""|| document.dados.email.value.indexOf('@')==-1|| document.dados.email.value.indexOf('.')==-1) {

	alert("Preencher correctamente o campo email");
	document.dados.email.focus();
	return false;
     }
  }