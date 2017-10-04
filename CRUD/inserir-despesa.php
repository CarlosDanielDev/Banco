<?php  ?>
<meta charset="utf-8">
<form name="dados-despesa" action="conexao-despesa.php" method="post">
	<table border="1">
		<tr>
			<td>Id-Frete:</td>
			<td><input type="number" name="idFrete"></td>
		</tr>
		<tr>
			<td>Titulo:</td>
			<td><input type="text" name="titulo"></td>
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><input type="text" name="descricao"></td>
		</tr>
		<tr>
			<td>Valor R$:</td>
			<td><input type="text" name="valor"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="date" name="data"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="acao" value="Inserir"></td>
			<td><input type="submit" name="Enviar" value="Adicionar"></td>
		</tr>

	</table>
	<a href="dados-despesa.php">Voltar</a>
</form>