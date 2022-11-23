<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=width-device initial-scale=1.0">
	<title></title>
	<style type="text/css">
	#formulario{
		width: 25%;
		margin: auto;
		background-color:gray;
		padding: 20px;
        
	}	
    body{
        background-color: black;
    }
    label{
        font-size: 30px;
    }
	textarea{
		height: 250px;
		width: 300px;
		resize: none;
		font-size: 20px;;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
    #nome{
        font-size: 19px;
    }
    #telefone{
        font-size: 19px;
    }
    #email{
        font-size: 19px;
    }
	#interesse{
		font-size: 19px;
	}
	h3{
		font-size: 25px;
		text-align: center;
	}
	h1{
		font-size: 35px;
		text-align: center;
	}
	#interesse{
		font-size: 19px;
	}
	#enviar{
		display: block;
		margin-left: auto;
		margin-right: auto;
		block-size: 30px;
	}
	#limpar{
		display: block;
		margin-left: auto;
		margin-right: auto;
		block-size: 30px;
	}
	</style>
</head>
<body>
<div id="formulario">
	<form name="form1" action="dadosprojetoum.php" method="post">
		<table>
			<tr>
				<h1>Cadastro de Curriculo</h1>
				<td><label for="nome">Nome:</label></td>
<td><input type="text" maxlength="50" minlength="10" name="nome" placeholder="Digite Aqui" required pattern="[a-zA-Z\s]+$" id="nome"></td>
			</tr>
			<tr>
				<td><label>telefone:</label></td>
				<td><input type="text" name="telefone" pattern="[0-9\s]+$" id="telefone"></td>
			</tr>
			<tr>
				<td><label>E-mail:</label></td>
        <td><input type="email" required name="email" id="email"></td>
			</tr>
            <tr>								
	<td><label>Seu curriculo</label></td>  
	<td><input type="file" accept=".pdf" name='arquivo' id="curriculo"></td>	    
	</tr>
         </form>
		</table>

	<h3>Qual sua area de interesse?</h3>
    <tr>
		<td><label>area de interesse:</label></td>
        <td><input type="text" required name="interesse" id="interesse"></td>
			</tr>
    
    <h3>escreva um resumo sobre voce</h3>
    <textarea name="recado" id="recado"></textarea><br>

		<input type="submit" value="Enviar" id="enviar">
		<input type="reset" value="Limpar Formulário" id="limpar">
	</form>
</div>
</body>
</html>


