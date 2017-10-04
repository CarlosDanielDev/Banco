<?php  
	include("conexao-despesa.php");
	$key = selectIdDespesa($_POST["id"]);
	//var_dump($key);
?>
<meta charset="utf-8">
<form name="dados-despesa" action="conexao-despesa.php" method="post">
	<table border="1">
		<tr>
			<td>Id-Frete:</td>
			<td><input type="number" name="idFrete" value="<?=$key["idFrete"]?>"></td>
		</tr>
		<tr>
			<td>Titulo:</td>
			<td><input type="text" name="titulo" value="<?=$key["titulo"]?>"></td>
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><input type="text" name="descricao" value="<?=$key["descricao"]?>"></td>
		</tr>
		<tr>
			<td>Valor R$:</td>
			<td><input type="text" name="valor" value="<?=$key["valor"]?>"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="date" name="data" value="<?=$key["data"]?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="acao" value="editar">
			<input type="hidden" name="id" value="<?=$key["id"]?>"></td>
			<td><input type="submit" name="Enviar" value="Salvar"></td>
		</tr>

	</table>
	<a href="dados-despesa.php">Voltar</a>
</form>