<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cliente</title>
</head>
<body>
	    	<form method="post" name="Cliente" action="ainstbc.php">
			<label>Nome</label>
			<input type="text" name="nome" maxlength="150">
			<label>CNPJ</label>
			<input type="text" name="cnpj" maxlength="15">
			<label>Inscrição Estadual</label>
			<input type="text" name="inscestadual">
			<label>Responsável</label>
			<input type="text" name="responsavel" maxlength="50">
			<label>CPF</label>
			<input type="text" name="cpf" maxlength="11">
			<label>RG</label>
			<input type="text" name="rg" maxlength="11">
			<label>Endereço</label>
			<input type="text" name="endereco" maxlength="100">
			<label>Número</label>
			<input type="text" name="num" maxlength="10">
			<label>Complemento</label>
			<input type="text" name="numcomp" maxlength="10">
			<label>Bairro</label>
			<input type="text" name="bairro" maxlength="30">
			<label>Cidade</label>
			<input type="text" name="cidade" maxlength="30">
			<label>Estado</label>
			<input type="text" name="estado" maxlength="30">
			<label>Celular</label>
			<input type="text" name="celular" maxlength="15">
			<label>E-mail</label>
			<input type="text" name="email" maxlength="50">
			<label>Observação</label>
			<input type="text" name="obs" maxlength="50">
			<input type="submit" name="salvar" value="Enviar">			
		</form>

</body>
</html>