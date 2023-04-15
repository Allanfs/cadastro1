<?php include_once"config.php";?>
<?php 
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tbclientes WHERE id = '$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn, $result_nomes);
WHILE($linha = mysqli_fetch_array($resultado_nomes)){
$id = $linha['id'];
$nome = $linha['nome'];
$cnpj = $linha['cnpj'];
$inscestadual = $linha['inscestadual'];
$responsavel = $linha['responsavel'];
$cpf = $linha['cpf'];
$rg = $linha['rg'];
$endereco = $linha['endereco'];
$num = $linha['num'];
$numcomp = $linha['numcomp'];
$bairro = $linha['bairro'];
$cidade = $linha['cidade'];
$estado = $linha['estado'];
$celular = $linha['celular'];
$email = $linha['email'];
$obs = $linha['obs'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cliente</title>
</head>
<body>
	<form method="get" nome="forbusca" action="busca.php">
		<label>Pesquisa</label>
		<input type="text" name="busca">
		<input type="submit" name="" value="OK">
	</form>
	<br>
	<form method="post" name="Cliente" action="ainstbc.php">
		<label>Nome</label>
		<input type="text" name="nome" maxlength="150" value="<?php echo $nome;?>">
		<label>CNPJ</label>
		<input type="text" name="cnpj" maxlength="15"value="<?php echo $cnpj;?>">
		<label>Inscrição Estadual</label>
		<input type="text" name="inscestadual" maxlength="15" value="<?php echo $inscestadual;?>">
		<label>Responsável</label>
		<input type="text" name="responsavel" maxlength="50" value="<?php echo $responsavel;?>">
		<label>CPF</label>
		<input type="text" name="cpf" maxlength="11" value="<?php echo $cpf;?>">
		<label>RG</label>
		<input type="text" name="rg" maxlength="11" value="<?php echo $rg;?>">
		<label>Endereço</label>
		<input type="text" name="endereco" maxlength="100" value="<?php echo $endereco;?>">
		<label>Número</label>
		<input type="text" name="num" maxlength="10" value="<?php echo $num;?>">
		<label>Complemento</label>
		<input type="text" name="numcomp" maxlength="10" value="<?php echo $numcomp;?>">
		<label>Bairro</label>
		<input type="text" name="bairro" maxlength="30" value="<?php echo $bairro;?>">
		<label>Cidade</label>
		<input type="text" name="cidade" maxlength="30" value="<?php echo $cidade;?>">
		<label>Estado</label>
		<input type="text" name="estado" maxlength="30" value="<?php echo $estado;?>">
		<label>Celular</label>
		<input type="text" name="celular" maxlength="15" value="<?php echo $celular;?>">
		<label>E-mail</label>
		<input type="text" name="email" maxlength="50" value="<?php echo $email;?>">
		<label>Observação</label>
		<input type="text" name="obs" maxlength="50" value="<?php echo $obs;?>">
		<input type="submit" name="salvar" value="Enviar">			
    </form>

</body>
</html>