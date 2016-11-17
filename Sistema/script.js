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

	if ((checarVazio(user.nome))||(checarVazio(user.cpf))||(checarVazio(user.data))||(checarVazio(user.telefone))||(checarVazio(user.email))||(checarVazio(user.tipoSangue))||(checarVazio(user.plano)))
	{
		alert("campo vazio");
		return false;//Deu problema
	}
	else
	{
		if ((checarChar(user.nome,1,1))||(checarChar(user.cpf,2,2))||(checarChar(user.telefone,2,3))||(checarChar(user.tipoSangue,3,4))||(checarChar(user.plano,1,5)))
		{
			alert("chars invalidos");
			return false;//Deu problema
		}
		else
			return true;//Não deu problema
	}
}

function validarMedico()
{
	var user = new Object();
	
	user.nome = document.forms["formMedico"]["nome_medico"].value;
	user.cpf = document.forms["formMedico"]["cpf_medico"].value;
	user.usuario = document.forms["formMedico"]["usuario_medico"].value;
	user.senha = document.forms["formMedico"]["senha_medico"].value;
	
	if ((checarVazio(user.nome))||(checarVazio(user.cpf))||(checarVazio(user.usuario))||(checarVazio(user.senha)))
	{
		alert("campo vazio");
		return false;//Deu problema
	}
	else
	{
		if ((checarChar(user.nome,1,6))||(checarChar(user.cpf,2,7)))
		{
			alert("chars invalidos");
			return false;//Deu problema
		}
		else
			return true;//Não deu problema
	}
}

function checarVazio(texto)
{
	if ((texto == null) || (texto==""))
		return true;
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
					if (idCaixa==1)
						document.getElementById("nome_paciente").className = "caixaComErro";
					return true;//Deu problema
				}
			}
		break;
		case 2:
			for (x=0;x<texto.length;x++)
			{
				if ((texto.charCodeAt(x) < 44) || (texto.charCodeAt(x) > 57))
				{
					return true;//Deu problema
				}
			}
		break;
		case 3:
			if (((texto=="A") || (texto=="B") || (texto=="AB") || (texto=="O"))) 
				return false;//Não deu problema
			else
				return true;//Deu problema
		break;
	}
	return false;
}