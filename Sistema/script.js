function validarPaciente()
{
	var user = new Object();
	user.nome = document.forms["formPaciente"]["nome_paciente"].value;
	user.cpf = document.forms["formPaciente"]["cpf_paciente"].value;
	user.data = document.forms["formPaciente"]["datanascimento_paciente"].value;
	user.telefone = document.forms["formPaciente"]["telefone_paciente"].value;
	user.email = document.forms["formPaciente"]["email_paciente"].value;
	user.tipoSangue = document.forms["formPaciente"]["tiposangue_paciente"].value.toUpperCase();
	user.plano = document.forms["formPaciente"]["planosaude_paciente"].value;
	user.alergias = document.forms["formPaciente"]["alergias_paciente"].value;
	user.prontuario = document.forms["formPaciente"]["prontuario_paciente"].value;
	
	document.getElementById("nome_paciente").className = "caixa";
	document.getElementById("cpf_paciente").className = "caixa";
	document.getElementById("datanascimento_paciente").className = "caixa";
	document.getElementById("telefone_paciente").className = "caixa";
	document.getElementById("email_paciente").className = "caixa";
	document.getElementById("tiposangue_paciente").className = "caixa";
	document.getElementById("planosaude_paciente").className = "caixa";
	
	var a = checarVazio(user.nome,"nome_paciente");
	var b = checarVazio(user.cpf,"cpf_paciente");
	var c = checarVazio(user.data,"datanascimento_paciente");
	var d = checarVazio(user.telefone,"telefone_paciente");
	var e = checarVazio(user.email,"email_paciente");
	var f = checarVazio(user.tipoSangue,"tiposangue_paciente");
	var g = checarVazio(user.plano,"planosaude_paciente");
	
	if (!(a || b || c || d || e || f || g))
	{
		var h = checarChar(user.nome,1,"nome_paciente");
		var i = checarChar(user.cpf,2,"cpf_paciente");
		var j = checarChar(user.telefone,2,"telefone_paciente");
		var k = checarChar(user.tipoSangue,3,"tiposangue_paciente");
		var l = checarChar(user.plano,1,"planosaude_paciente");
		
		if (!(h || i || j || k || l))
			document.getElementById("formPaciente").submit();
	}
}

function validarMedico()
{
	var user = new Object();
	
	user.nome = document.forms["formMedico"]["nome_medico"].value;
	user.cpf = document.forms["formMedico"]["cpf_medico"].value;
	user.usuario = document.forms["formMedico"]["usuario_medico"].value;
	user.senha = document.forms["formMedico"]["senha_medico"].value;

	document.getElementById("nome_medico").className = "caixa";
	document.getElementById("cpf_medico").className = "caixa";
	document.getElementById("usuario_medico").className = "caixa";
	document.getElementById("senha_medico").className = "caixa";
	
	var a = checarVazio(user.nome,"nome_medico");
	var b = checarVazio(user.cpf,"cpf_medico");
	var c = checarVazio(user.usuario,"usuario_medico");
	var d = checarVazio(user.senha,"senha_medico");
	
	if (!(a || b || c || d))
	{
		var e = checarChar(user.nome,1,"nome_medico");
		var f = checarChar(user.cpf,2,"cpf_medico");
		if (!(e || f))
			document.getElementById("formMedico").submit();
	}
}

function checarVazio(texto,idCaixa)
{
	if ((texto == null) || (texto==""))
	{
		document.getElementById("" + idCaixa).className = "caixaComErro";
		return true;
	}
	else
		return false;
}

function checarChar(texto,tipoChecagem,idCaixa)
{
	switch (tipoChecagem)
	{
		case 1:
			for (x=0;x<texto.length;x++)
			{
				if ((texto.charCodeAt(x) >= 44) && (texto.charCodeAt(x) <= 57))
				{
					document.getElementById("" + idCaixa).className = "caixaComErro";
					return true;//Deu problema
				}
			}
		break;
		case 2:
			for (x=0;x<texto.length;x++)
			{
				if ((texto.charCodeAt(x) < 44) || (texto.charCodeAt(x) > 57))
				{
					document.getElementById("" + idCaixa).className = "caixaComErro";
					return true;//Deu problema
				}
			}
		break;
		case 3:
			if (((texto=="A") || (texto=="B") || (texto=="AB") || (texto=="O"))) 
				return false;//Não deu problema
			else
			{
				document.getElementById("" + idCaixa).className = "caixaComErro";
				return true;//Deu problema
			}
		break;
	}
	return false;
}